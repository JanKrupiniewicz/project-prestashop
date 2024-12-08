import base64
from io import BytesIO
from pathlib import Path
import random
from PIL import Image
from delete import WEBSERVICE_KEY, BASE_URL
import requests
from jinja2 import Environment, FileSystemLoader
import xml.etree.ElementTree as ET
import json

JSON_DATA_PATH = Path(__file__).parent.parent / "scraper-results/products.json"
XML_TEMPLATE_PATH = Path(__file__).parent / "xml-templates"

CATEGORIES_API_PATH = BASE_URL + "/categories"
PRODUCTS_API_PATH = BASE_URL + "/products"
MANUFACTURERS_API_PATH = BASE_URL + "/manufacturers"
SUPPLIERS_API_PATH = BASE_URL + "/suppliers"
STOCK_API_PATH = BASE_URL + "/stock_availables"
IMAGE_API_PATH = BASE_URL + "/images/products"


class Category:
    def __init__(self, name: str, env: Environment):
        self.name = name
        self.env = env

    def to_xml(self) -> str:
        template = self.env.get_template('category.xml')
        return template.render(name=self.name)

    def set_category_id(self, category_id: int):
        self.category_id = category_id


class Subcategory(Category):
    def __init__(self, name: str, parent_id: int, env: Environment):
        super().__init__(name, env)
        self.parent_id = parent_id

    def to_xml(self) -> str:
        template = self.env.get_template('subcategory.xml')
        return template.render(name=self.name, parent_id=self.parent_id)

    def set_category_id(self, category_id: int):
        self.category_id = category_id


class Product:
    def __init__(self, name: str, price: float, category_id: int, description: str, env: Environment):
        self.name = name
        self.price = price
        self.category_id = category_id
        self.description = description
        self.ean13 = f"{random.randint(0, 9999999999999):013}"
        self.env = env

    def to_xml(self) -> str:
        template = self.env.get_template('product.xml')
        return template.render(name=self.name, price=self.price, category_id=self.category_id, description=self.description, ean13=self.ean13)

    def set_product_id(self, product_id: int):
        self.product_id = product_id


class PrestashopSeeder:
    def __init__(self):
        self.s = requests.Session()
        self.s.headers.update({"Content-Type": "application/xml"})
        self.s.verify = False
        self.s.auth = requests.auth.HTTPBasicAuth(WEBSERVICE_KEY, "")
        self.env = Environment(loader=FileSystemLoader(XML_TEMPLATE_PATH))

    def create_resources(self):
        pass

    def get_json_data(self):
        pass

    def create_supplier(self) -> int:
        template = self.env.get_template('supplier.xml')
        supplier = template.render()

        response = self.s.post(SUPPLIERS_API_PATH, data=supplier)

        if response.status_code != 201:
            print(f'Failed to create supplier: {response.text}')
            return -1

        root = ET.fromstring(response.content)
        supplier_id = root.find('.//id').text
        return supplier_id

    def create_manufacturer(self) -> int:
        template = self.env.get_template('manufacturer.xml')
        manufacturer = template.render()

        response = self.s.post(MANUFACTURERS_API_PATH, data=manufacturer)

        if response.status_code != 201:
            print(f'Failed to create manufacturer: {response.text}')
            return -1

        root = ET.fromstring(response.content)
        manufacturer_id = root.find('.//id').text
        return manufacturer_id

    def create_category(self, name: str) -> Category:
        category = Category(name, self.env)
        category_xml = category.to_xml()

        response = self.s.post(CATEGORIES_API_PATH, data=category_xml)

        if response.status_code != 201:
            print(f'Failed to create category {name}: {response.text}')
            return -1

        root = ET.fromstring(response.content)
        category_id = root.find('.//id').text
        category.set_category_id(category_id)

        return category

    def create_subcategory(self, name: str, parent_id: int) -> Category:
        subcategory = Subcategory(name, parent_id, self.env)
        subcategory_xml = subcategory.to_xml()

        response = self.s.post(CATEGORIES_API_PATH, data=subcategory_xml)

        if response.status_code != 201:
            print(f'Failed to create subcategory {name}: {response.text}')
            return -1

        root = ET.fromstring(response.content)
        category_id = root.find('.//id').text
        subcategory.set_category_id(category_id)

        return subcategory

    def create_product(self, name: str, price: float, category_id: int, description: str, product_image) -> Product:
        product = Product(name, price, category_id, description, self.env)
        product_xml = product.to_xml()

        response = self.s.post(PRODUCTS_API_PATH, data=product_xml)

        if response.status_code != 201:
            print(f'Failed to create product {name}: {response.text}')
            return -1
        else:
            print(f'add product {name}')

        root = ET.fromstring(response.content)
        product_id = root.find('.//id').text
        product.set_product_id(product_id)
        self.upload_product_image(product_id, product_image)
        product_stock = self.product_stock(product_id)

        if not product_stock:
            print(f'Failed to set stock for product {product_id}')
            return -1

        return product

    def product_stock(self, product_id: int, quantity: int = 5) -> bool:
        template = self.env.get_template('stock.xml')

        get_response = self.s.get(STOCK_API_PATH, params={'filter[id_product]': product_id, 'display': 'full'})

        if get_response.status_code != 200:
            print(f'Failed to retrieve stock for product {product_id}: {get_response.text}')
            return False

        root = ET.fromstring(get_response.content)
        stock_available = root.find('.//stock_available')
        stock_id = stock_available.find('id').text
        id_product = stock_available.find('id_product').text
        quantity_str = quantity
        stock = template.render(id=stock_id,  id_product=id_product, quantity=quantity)
        response = self.s.put(f'{STOCK_API_PATH}/{stock_available}', data=stock)

        if response.status_code not in [200, 204]:
            print(f'Failed to update stock for product {product_id}: {response.text}')
            return False

        return True

    def read_json_and_seed(self):
        with open(JSON_DATA_PATH, 'r', encoding='utf-8') as file:
            data = json.load(file)
        for dat in data:
            for category in dat.get("categories", []):
                category_name = category.get("name")
                categories = self.create_category(category_name)
                for subcategory in category.get("subcategories", []):
                    subcategory_name = subcategory.get("name")
                    subcategories = self.create_subcategory(subcategory_name, categories.category_id)
                    for subsubcategory in subcategory.get("subsubcategories", []):
                        for product in subsubcategory.get("products", []):
                            product_title = product.get("title")
                            product_price = product.get("price")
                            product_description = product.get("description")
                            product_image_url = product.get("image_url")
                            self.create_product(product_title, product_price, subcategories.category_id, product_description, product_image_url)

    def upload_product_image(self, product_id, image_path):
        endpoint = f"{BASE_URL}/images/products/{product_id}"
        headers = {
            'Authorization': f'Basic {base64.b64encode(f"{WEBSERVICE_KEY}:".encode()).decode()}'
        }
        response = requests.get(image_path, stream=True)
        if response.status_code != 200:
            print(f"Failed to retrieve image from URL: {image_path}")
            return None
        image = Image.open(BytesIO(response.content))

        if image.format.lower() != 'jpeg':
            image = image.convert("RGB")
            output = BytesIO()
            image.save(output, format='JPEG')
            output.seek(0)
        else:
            output = BytesIO(response.content)
        mime_type = 'image/jpeg'
        files = {
            'image': (image_path.split('/')[-1], output, mime_type)
        }
        response = requests.post(endpoint, headers=headers, files=files, verify=False)
        if response.status_code != 200:
            print(f"Failed to upload image: {response.status_code} - {response.text}")
        return response


def main():
    seeder = PrestashopSeeder()
    seeder.read_json_and_seed()


if __name__ == '__main__':
    main()