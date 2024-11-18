import requests
from bs4 import BeautifulSoup
import json
import os

BASE_URL = 'https://www.toys4boys.pl'
CATALOG_URL_TEMPLATE = 'https://www.toys4boys.pl/17-katalog-wszystkich-produktow?page={}'
HEADERS = {
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'
}
IMAGES_FOLDER = 'images'
os.makedirs(IMAGES_FOLDER, exist_ok=True)

#TODO taxes

def get_soup(url):
    response = requests.get(url, headers=HEADERS)
    response.raise_for_status()
    return BeautifulSoup(response.content, 'lxml')

def get_categories():
    print('Fetching categories')
    soup = get_soup(BASE_URL)
    categories = []
    menu = soup.select('ul.st_mega_menu > li')

    for li in menu:
        category = {}
        category_a = li.find('a')
        if category_a:
            category_name = category_a.get_text(strip=True)
            category_url = category_a['href']
            category['name'] = category_name
            category['url'] = category_url
            category['subcategories'] = []

            subcategories = li.select('ul.mu_level_1 > li')
            for sub in subcategories:
                sub_a = sub.find('a')
                if sub_a:
                    subcategory_name = sub_a.get_text(strip=True)
                    subcategory_url = sub_a['href']
                    subcategory = {
                        'name': subcategory_name,
                        'url': subcategory_url,
                        'subsubcategories': []
                    }
                    for subsub in sub.select('ul.mu_level_2 > li'):
                        subsub_a = subsub.find('a')
                        if subsub_a:
                            subsubcategory_name = subsub_a.get_text(strip=True)
                            subsubcategory_url = subsub_a['href']
                            subcategory['subsubcategories'].append({
                                'name': subsubcategory_name,
                                'url': subsubcategory_url
                            })
                    category['subcategories'].append(subcategory)

            categories.append(category)
    return categories

def download_image(image_url, product_id, headers, images_folder):
    if image_url:
        image_extension = os.path.splitext(image_url)[1]
        image_filename = f"{product_id}{image_extension}"
        image_filepath = os.path.join(images_folder, image_filename)
        image_response = requests.get(image_url, headers=headers)
        if image_response.status_code == 200:
            with open(image_filepath, 'wb') as f:
                f.write(image_response.content)
            return image_filename
        else:
            print(f'Failed to download image: {image_url}')
            return None
    else:
        return None

def scrape_products_from_page(url, headers, images_folder):
    data = []
    response = requests.get(url, headers=headers)
    if response.status_code != 200:
        print(f'Failed to retrieve page: {url}')
        return data

    soup = BeautifulSoup(response.content, 'html.parser')
    products = soup.find_all('article', class_='ajax_block_product js-product-miniature')

    for product in products:
        product_link_tag = product.find('a', class_='product_img_link')
        if not product_link_tag:
            continue
        product_url = product_link_tag['href']
        if not product_url.startswith('http'):
            product_url = BASE_URL + product_url

        product_id = product.get('data-id-product', 'unknown')
        product_response = requests.get(product_url, headers=headers)
        if product_response.status_code != 200:
            print(f'Failed to retrieve product page: {product_url}')
            continue
        product_soup = BeautifulSoup(product_response.content, 'html.parser')

        title_tag = product_soup.find('h1', itemprop='name')
        title = title_tag.get_text(strip=True) if title_tag else 'No Title'

        price_tag = product_soup.find('span', itemprop='price')
        if price_tag and 'content' in price_tag.attrs:
            price = price_tag['content']
        else:
            price = price_tag.get_text(strip=True) if price_tag else 'No Price'

        description_tag = product_soup.find('div', itemprop='description')
        description = description_tag.get_text(strip=True) if description_tag else 'No Description'

        image_meta = product_soup.find('meta', itemprop='image')
        image_url = image_meta['content'] if image_meta and 'content' in image_meta.attrs else None

        image_filename = download_image(image_url, product_id, headers, images_folder)

        data.append({
            'product_id': product_id,
            'title': title,
            'price': price,
            'description': description,
            'image_url': image_url,
            'image_file': image_filename
        })
    return data

def main():
    categories = get_categories()
    all_data = []

    for category in categories:
        print(f"Processing category: {category['name']}")
        for subcategory in category['subcategories']:
            print(f"Processing subcategory: {subcategory['name']}")
            subcategory_url = subcategory['url']
            subcategory_data = scrape_products_from_page(subcategory_url, HEADERS, IMAGES_FOLDER)
            subcategory['products'] = subcategory_data
            for subsubcategory in subcategory['subsubcategories']:
                print(f"Processing subsubcategory: {subsubcategory['name']}")
                subsubcategory_url = subsubcategory['url']
                subsubcategory_data = scrape_products_from_page(subsubcategory_url, HEADERS, IMAGES_FOLDER)
                subsubcategory['products'] = subsubcategory_data

    catalog_data = []
    #range is TODO
    for page in range(1, 2):
        catalog_url = CATALOG_URL_TEMPLATE.format(page)
        catalog_data.extend(scrape_products_from_page(catalog_url, HEADERS, IMAGES_FOLDER))

    all_data.append({
        'categories': categories,
        'catalog': catalog_data
    })

    with open('products.json', 'w', encoding='utf-8') as f:
        json.dump(all_data, f, ensure_ascii=False, indent=4)



if __name__ == '__main__':
    main()
