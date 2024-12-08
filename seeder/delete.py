import requests
import xml.etree.ElementTree as ET

WEBSERVICE_KEY = 'N8WWMLMWBALQC2S2LMUA4AJKP7Z3H6LD'
BASE_URL = 'http://localhost:8080/api/'


class PrestashopWebService:
    def __init__(self):
        self.s = requests.Session()
        self.s.headers.update({"Content-Type": "application/xml"})
        self.s.verify = False
        self.s.auth = requests.auth.HTTPBasicAuth(WEBSERVICE_KEY, "")

    def delete_sample_data(self):
        categories = self.get_categories()
        products = self.get_products()

        for product_id in products:
            self.delete_product(product_id)

        for category_id in categories:
            self.delete_category(category_id)

    def delete_resource(self, resource: str, id: int) -> bool:
        url = f'{BASE_URL}/{resource}/{id}'

        response = self.s.delete(url)

        if response.status_code != 200:
            print(f'Failed to delete resource {resource} with id {id}: {response.text}')
            return False

        return True

    def delete_category(self, id: int) -> bool:
        return self.delete_resource('categories', id)

    def delete_product(self, id: int) -> bool:
        return self.delete_resource('products', id)

    def get_categories(self):
        url = f'{BASE_URL}/categories'

        response = self.s.get(url)

        if response.status_code != 200:
            print(f'Failed to retrieve categories: {response.text}')
            return []

        root = ET.fromstring(response.text)
        categories = root.findall('categories/category')
        id = []

        for category in categories:
            category_id = category.get('id')
            id.append(category_id)

        return id

    def get_products(self):
        url = f'{BASE_URL}/products'

        response = self.s.get(url)

        if response.status_code != 200:
            print(f'Failed to retrieve products: {response.text}')
            return []

        root = ET.fromstring(response.text)
        products = root.findall('products/product')
        id = []

        for product in products:
            product_id = product.get('id')
            id.append(product_id)

        return id


def main():
    ps = PrestashopWebService()
    ps.delete_sample_data()


if __name__ == '__main__':
    main()