import requests
from bs4 import BeautifulSoup
import pandas as pd
#const
base_url = 'https://www.toys4boys.pl/17-katalog-wszystkich-produktow?page={}'
data = []

# Loop through the pages
for page in range(1, 23):
    # Send a request to the website
    response = requests.get(base_url.format(page))

    # Check if the request was successful
    if response.status_code == 200:
        soup = BeautifulSoup(response.text, 'html.parser')

        # Find all product items (adjusted based on the actual HTML structure)
        products = soup.find_all('div', class_='pro_first_box')

        # Check if any products were found
        if not products:
            print(f"No products found on page {page}.")
        else:
            for product in products:
                # Extract title
                title_tag = product.find('a', title=True)
                title = title_tag['title'] if title_tag else 'null'

                # Extract image URL
                img_tag = product.find('img', class_='front-image')
                img_url = img_tag['data-src'] if img_tag and 'data-src' in img_tag.attrs else 'null'

                # # Extract description
                # desc_tag = product.find('div', class_='product-description')
                # desc = desc_tag.get_text(strip=True) if desc_tag else 'null'

                # Extract price
                # price_tag = product.find('span', class_='price', itemprop='price')
                # price = price_tag['content'] if price_tag and 'content' in price_tag.attrs else 'null'
                #
                # # Extract attributes
                # attr_tag = product.find('div', class_='st_read_more_box')
                # attributes = [li.get_text(strip=True) for li in attr_tag.find_all('li')] if attr_tag else 'null'

                # Append the data
                data.append({
                    'title': title,
                    'image_url': img_url,
                    # 'description': desc,
                    # 'price': price,
                    # 'attributes': attributes
                })
    else:
        print(f"Failed to retrieve page {page}. Status code: {response.status_code}")

# Create a DataFrame and save to CSV
df = pd.DataFrame(data)
df.to_csv('products.csv', index=False)
print(f"{len(data)} products found and saved to products.csv.")
