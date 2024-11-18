import requests
from bs4 import BeautifulSoup
import json
import os

base_url = 'https://www.toys4boys.pl'
url_template = 'https://www.toys4boys.pl/17-katalog-wszystkich-produktow?page={}'
headers = {
    'User-Agent': 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) '
                  'AppleWebKit/537.36 (KHTML, like Gecko) '
                  'Chrome/81.0.4044.138 Safari/537.36'
}
data = []
images_folder = 'images'
os.makedirs(images_folder, exist_ok=True)

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

#to test the code change the range to 2!!!
for page in range(1, 23):
    response = requests.get(url_template.format(page), headers=headers)
    if response.status_code != 200:
        print(f'Failed to retrieve page {page}')
        continue

    soup = BeautifulSoup(response.content, 'html.parser')
    products = soup.find_all('article', class_='ajax_block_product js-product-miniature')

    for product in products:
        product_link_tag = product.find('a', class_='product_img_link')
        if not product_link_tag:
            continue
        product_url = product_link_tag['href']

        if not product_url.startswith('http'):
            product_url = base_url + product_url

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

with open('products2.json', 'w', encoding='utf-8') as f:
    json.dump(data, f, ensure_ascii=False, indent=4)

print(f"{len(data)} products found and saved to products.json.")
