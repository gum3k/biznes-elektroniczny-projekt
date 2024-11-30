import random
import unicodedata
import shutil
from bs4 import BeautifulSoup
import requests
import os


def remove_czech_accents(text):
    normalized = unicodedata.normalize('NFD', text)
    return ''.join(char for char in normalized if unicodedata.category(char) != 'Mn')


products_count = 660
url = 'https://www.imago.cz'

response = requests.get(url)
response.raise_for_status()

soup = BeautifulSoup(response.text, 'html.parser')

os.makedirs('imago_products', exist_ok=True)

categories_structure = ''

categories = soup.find_all('a', class_='menu firstlevel')

for category in categories:
    if os.path.isdir('imago_products/' + category.text):
        print("Folder " + category.text + " istnieje!")
    else:
        os.makedirs('imago_products/' + category.text, exist_ok=True)

        categories_structure += category.text

        category_response = requests.get(category['href'])

        if category_response.status_code == 200:
            category_soup = BeautifulSoup(category_response.text, 'html.parser')
            subcategories = category_soup.find_all('a', class_='boxik')

            for subcategory in subcategories:

                if subcategory['href'][0:8] != 'https://':
                    break
                categories_structure += '|' + subcategory['title']
                dir_path = os.path.join('imago_products/' + category.text, subcategory['title'])
                if os.path.isdir(dir_path):
                    print("Subfolder " + subcategory['title'] + " istnieje!")
                else:
                    csv_path = os.path.join(dir_path, 'product.txt')
                    os.makedirs(dir_path, exist_ok=True)

                    subcategory_response = requests.get(subcategory['href'])
                    if subcategory_response.status_code != 200:
                        break

                    subcategory_soup = BeautifulSoup(subcategory_response.text, 'html.parser')

                    products = subcategory_soup.find_all('h3', class_='vypis_h3')  # Adjust class as per site's structure

                    for product in products:
                        parameters = {'width': '0', 'length': '0', 'height': '0', 'weight': '0', 'volume': '0'}
                        product_response = requests.get(product.find('a')['href'])

                        if product_response.status_code == 200:
                            product_soup = BeautifulSoup(product_response.text, 'html.parser')

                            product_name = product_soup.find('h1', id='produkt_h1')
                            if product_name:
                                product_name = product_name.text
                            else:
                                product_name = 'Lorem lipsum'

                            product_cost = product_soup.find('span', id='cena')
                            if product_cost:
                                product_cost = str(round(int(product_cost.text.replace('\n', '').replace(' ', '').split(',')[0].split('K')[0]) * 0.17, 2))
                            else:
                                product_cost = '100'

                            product_description = product_soup.find('div', class_='product_detail')
                            if product_description:
                                product_description = product_description.text.replace('\n', '').replace('\r', ' ')
                            else:
                                product_description = 'Lorem lipsum'

                            product_parameters_divs = product_soup.find('div', class_='detaily_vydani').find_all('div')

                            for div in product_parameters_divs:
                                second_letter = div.text[1]
                                if second_letter == 'é':
                                    parameters['length'] = div.text.split(' ')[1]
                                elif second_letter == 'í':
                                    parameters['width'] = div.text.split(' ')[1]
                                elif second_letter == 'ý':
                                    parameters['height'] = div.text.split(' ')[1]
                                elif second_letter == 'á':
                                    parameters['weight'] = div.text.split(' ')[2]
                                elif second_letter == 'b':
                                    parameters['volume'] = div.text.split(' ')[1]

                            img_tag1 = product_soup.find('img', id='image')
                            img_tag2 = product_soup.find('img', id='produkt_image_')
                            if not img_tag2:
                                img_tag2 = product_soup.find('img', id='produkt_image_0')

                            if img_tag1:
                                if img_tag1.get('data-src'):
                                    img_url1 = img_tag1['data-src'].split('?')[0]
                                else:
                                    img_url1 = img_tag1['src'].split('?')[0]

                                img_response1 = requests.get(img_url1)
                                if img_response1.status_code == 200:
                                    img_name1 = os.path.basename(img_url1)
                                    with open(os.path.join(dir_path, os.path.basename(img_url1)), 'wb') as f:
                                        f.write(img_response1.content)
                                else:
                                    img_name1 = 'loremlipsum.jpg'
                                    shutil.copy('loremlipsum.jpg', os.path.join(dir_path, img_name1))
                            else:
                                img_name1 = 'loremlipsum.jpg'
                                shutil.copy('loremlipsum.jpg', os.path.join(dir_path, img_name1))


                            if img_tag2:
                                if img_tag2.get('data-src'):
                                    img_url2 = img_tag2['data-src'].split('?')[0]
                                else:
                                    img_url2 = img_tag2['src'].split('?')[0]

                                img_response2 = requests.get(img_url2)
                                if img_response2.status_code == 200:
                                    img_name2 = os.path.basename(img_url2)
                                    with open(os.path.join(dir_path, os.path.basename(img_url2)), 'wb') as f:
                                        f.write(img_response2.content)
                                else:
                                    img_name2 = img_name1
                            else:
                                img_name2 = img_name1

                            with open(csv_path, 'a', encoding='utf-8') as f:
                                # INFORMATION FOR THE PRODUCT
                                # IF NOT GIVEN THEN 0
                                # name|how many in stock|first image name|second image name|cost in zl|length|width|height|weight|volume|description
                                f.write(f"{product_name}|{str(random.randint(0, 10))}|{img_name1}|{img_name2}|{product_cost}|{parameters['length']}|{parameters['width']}|{parameters['height']}|{parameters['weight']}|{parameters['volume']}|{product_description}\n")
                                products_count += 1
                                print(products_count)

            categories_structure += '\n'
            print(categories_structure)

            if products_count > 1100:
                break

        if products_count > 1100:
            break

with open('categories.txt', 'w') as f:
    f.write(categories_structure)
