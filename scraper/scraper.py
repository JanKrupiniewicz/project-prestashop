import requests
from bs4 import BeautifulSoup
import json

base_url = 'https://www.toys4boys.pl'
url_template = 'https://www.toys4boys.pl/17-katalog-wszystkich-produktow?page={}'
headers = {
    'User-Agent': 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) '
                  'AppleWebKit/537.36 (KHTML, like Gecko) '
                  'Chrome/81.0.4044.138 Safari/537.36'
}
data = []

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


        image_meta = product_soup.find('meta', itemprop='image')
        image_url = image_meta['content'] if image_meta and 'content' in image_meta.attrs else 'No Image URL'


        data.append({
            'title': title,
            'price': price,
            'image_url': image_url
        })


with open('products.json', 'w', encoding='utf-8') as f:
    json.dump(data, f, ensure_ascii=False, indent=4)

print(f"{len(data)} products found and saved to products.json.")
