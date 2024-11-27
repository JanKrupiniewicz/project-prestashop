from pathlib import Path
import random
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
    
    def create_product(self, name: str, price: float, category_id: int, description: str) -> Product:
        product = Product(name, price, category_id, description, self.env)
        product_xml = product.to_xml()

        response = self.s.post(PRODUCTS_API_PATH, data=product_xml)

        if response.status_code != 201:
            print(f'Failed to create product {name}: {response.text}')
            return -1

        root = ET.fromstring(response.content)
        product_id = root.find('.//id').text
        product.set_product_id(product_id)

        product_stock = self.product_stock(product_id)

        if not product_stock:
            return -1

        return product
    
    def product_stock(self, product_id: int, quantity: int = 100) -> bool:
        template = self.env.get_template('stock.xml')

        get_response = self.s.get(STOCK_API_PATH, params={'filter[id_product]': product_id, 'display': 'full'})

        if get_response.status_code != 200:
            print(f'Failed to retrieve stock for product {product_id}: {response.text}')
            return False
        
        root = ET.fromstring(response.content)
        stock_id = root.find('.//id').text

        stock = template.render(product_id=product_id, quantity=quantity)
        response = self.s.patch(f'{STOCK_API_PATH}/{stock_id}', data=stock)

        if response.status_code != 201:
            print(f'Failed to create stock for product {product_id}: {response.text}')
            return False
        
        return True


    def read_json_and_seed(self):
        with open(JSON_DATA_PATH, 'r', encoding='utf-8') as file:
            categories = json.load(file)

        for category_data in categories:
            category_name = category_data["name"]
            print(f"Creating category: {category_name}")
        


def main():
    seeder = PrestashopSeeder()
    # seeder.read_json_and_seed()

    # categories = ['Clothing', 'Shoes', 'Accessories']
    # subcategories = ['For Him', 'For Her', 'For Kids']
    products = [
        {
            'name': 'T-shirt',
            'price': 20.0,
            'category_id': 3,
            'description': 'A nice t-shirt'
        },
        {
            'name': 'Sneakers',
            'price': 50.0,
            'category_id': 3,
            'description': 'A nice pair of sneakers'
        },
        {
            'name': 'Hat',
            'price': 10.0,
            'category_id': 3,
            'description': 'A nice hat'
        }
    ]


    # for category in categories:
    #     category = seeder.create_category(category)

    # for subcategory in subcategories:
    #     subcategory = seeder.create_subcategory(subcategory, 1)

    for product in products:
        product = seeder.create_product(product['name'], product['price'], product['category_id'], product['description'])


if __name__ == '__main__':
    main()