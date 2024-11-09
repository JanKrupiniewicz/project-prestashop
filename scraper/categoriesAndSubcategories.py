import requests
from bs4 import BeautifulSoup
import time
import json

headers = {
    "User-Agent": "Mozilla/5.0"
}

data = []


def main():
    res = requests.get('https://www.toys4boys.pl/', headers=headers)
    soup = BeautifulSoup(res.text, 'lxml')

    categories = soup.select('ul.st_mega_menu > li')

    for category in categories:
        category_a = category.find('a')
        if category_a:
            category_name = category_a.text.strip()
            category_url = category_a['href']
            print(f"Kategoria: {category_name}")
            subcategories = category.select('ul.mu_level_1 > li')
            if subcategories:
                for sub in subcategories:
                    sub_a = sub.find('a')
                    if sub_a:
                        sub_name = sub_a.text.strip()
                        sub_url = sub_a['href']
                        print(f"  Podkategoria: {sub_name}")
                        # Przetwarzaj produkty w podkategorii
                        #process_category(sub_name, sub_url)
            #else:
                # Przetwarzaj produkty w kategorii głównej
                #process_category(category_name, category_url)
            # Przerwa między kategoriami
            time.sleep(1)



if __name__ == '__main__':
    main()
