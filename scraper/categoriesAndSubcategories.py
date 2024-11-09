#Biznes Elektroniczny
import csv
import requests
from bs4 import BeautifulSoup
import os
import json
import time
import pandas as pd

# Base URL of the website
BASE_URL = 'https://www.toys4boys.pl'

# Headers to simulate a browser visit
HEADERS = {
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'
}

# Function to get the soup object from a URL
def get_soup(url):
    response = requests.get(url, headers=HEADERS)
    response.raise_for_status()  # Raise an exception for HTTP errors
    return BeautifulSoup(response.content, 'lxml')

# Function to get categories and subcategories
def get_categories():
    print('Fetching categories...')
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

            # Find subcategories
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
                    # Find subsubcategories
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

# Main scraping function
def main():
    categories = get_categories()
    print('Categories found:')
    # Print categories, subcategories, and subsubcategories
    for category in categories:
        print(f"  {category['name']}")
        for subcategory in category['subcategories']:
            print(f"    {subcategory['name']}")
            for subsubcategory in subcategory['subsubcategories']:
                print(f"      {subsubcategory['name']}")
    # Save data categories, subcategories, and subsubcategories to CSV
    with open('toys4boys_categories_data.csv', 'w', newline='', encoding='utf-8') as f:
        writer = csv.writer(f)
        writer.writerow(['Category', 'Subcategory', 'Subsubcategory'])
        for category in categories:
            if not category['subcategories']:
                writer.writerow([category['name'], '', ''])
            for subcategory in category['subcategories']:
                if not subcategory['subsubcategories']:
                    writer.writerow([category['name'], subcategory['name'], ''])
                for subsubcategory in subcategory['subsubcategories']:
                    writer.writerow([category['name'], subcategory['name'], subsubcategory['name']])
    print('Scraping completed and data saved to toys4boys_categories_data.csv.')

if __name__ == '__main__':
    main()
