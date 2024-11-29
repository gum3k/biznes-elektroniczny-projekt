import os
import requests
import urllib3
from requests.auth import HTTPBasicAuth
import unidecode
import re
from bs4 import BeautifulSoup
from xml.sax.saxutils import escape

API_URL = "https://localhost/api"
API_KEY = "7PQ2P1V63W3QN98TSQHG16M1EXJYA172"
auth = HTTPBasicAuth(API_KEY, '')

def generate_link_rewrite(category_name):
    link_rewrite = unidecode.unidecode(category_name).lower()
    link_rewrite = re.sub(r'[^a-z0-9\-]', '-', link_rewrite)  
    link_rewrite = re.sub(r'-+', '-', link_rewrite).strip('-')  
    return link_rewrite

def replace_czech_characters(text):
    czech_to_unicode = {
        'á': '&#225;', 'č': '&#269;', 'ď': '&#271;', 'é': '&#233;', 'ě': '&#283;',
        'í': '&#237;', 'ň': '&#328;', 'ó': '&#243;', 'ř': '&#345;', 'š': '&#353;',
        'ť': '&#357;', 'ú': '&#250;', 'ů': '&#367;', 'ý': '&#253;', 'ž': '&#382;',
        'Á': '&#193;', 'Č': '&#268;', 'Ď': '&#270;', 'É': '&#201;', 'Ě': '&#282;',
        'Í': '&#205;', 'Ň': '&#327;', 'Ó': '&#211;', 'Ř': '&#344;', 'Š': '&#352;',
        'Ť': '&#356;', 'Ú': '&#218;', 'Ů': '&#366;', 'Ý': '&#221;', 'Ž': '&#381;'
    }
    for char, unicode_char in czech_to_unicode.items():
        text = text.replace(char, unicode_char)
    return text


def create_category(name, parent_id=2):
    try:
        escaped_name = escape(name)
        link_rewrite = generate_link_rewrite(name)
        data = f"""
        <prestashop>
          <category>
            <id_parent>{parent_id}</id_parent>
            <active>1</active>
            <name>
              <language id="1">{escaped_name}</language>
            </name>
            <link_rewrite>
              <language id="1">{link_rewrite}</language>
            </link_rewrite>
          </category>
        </prestashop>
        """
        response = requests.post(f"{API_URL}/categories", auth=auth, data=data, verify=False)
        if response.status_code == 201:
            soup = BeautifulSoup(response.content, "xml")
            category_id = soup.find("id").text
            print(f"kategoria '{name}' została utworzona z id: {category_id}.")
            return category_id
        else:
            print(f"błąd tworzenia kategorii '{name}': {response.text}")
            return None
    except Exception as e:
        print(f"wyjątek tworzenia kategorii '{name}': {e}")
        return None

def get_stock_available_id(product_id):
    try:
        response = requests.get(f"{API_URL}/stock_availables?filter[id_product]={product_id}&display=full", auth=auth, verify=False)
        if response.status_code == 200:
            soup = BeautifulSoup(response.content, "xml")
            stock_available = soup.find("stock_available")
            if stock_available:
                stock_id = stock_available.find("id").text
                print(f"znaleziono id: {stock_id} dla produktu id: {product_id}.")
                return stock_id
        print(f"nie znaleziono stock_available dla produktu id: {product_id}.")
        return None
    except Exception as e:
        print(f"wyjątek podczas pobierania stock_available: {e}")
        return None

def update_stock_quantity(stock_available_id, quantity, id):
    try:
        data = f"""
        <prestashop xmlns:xlink="http://www.w3.org/1999/xlink">
          <stock_available>
            <id>{stock_available_id}</id>
            <id_product xlink:href="https://localhost/api/products/{id}">{id}</id_product>
            <id_product_attribute>0</id_product_attribute>
            <id_shop xlink:href="https://localhost/api/shops/1">1</id_shop>
            <id_shop_group>0</id_shop_group>
            <quantity>{quantity}</quantity>
            <depends_on_stock>0</depends_on_stock>
            <out_of_stock>2</out_of_stock>
            <location></location>
          </stock_available>
        </prestashop>
        """
        response = requests.put(f"{API_URL}/stock_availables/{stock_available_id}", auth=auth, data=data, verify=False)
        if response.status_code == 200:
            print(f"zaktualizowano stock_available ID: {stock_available_id} na ilość: {quantity}.")
        else:
            print(f"błąd aktualizacji stock_available ID: {stock_available_id}: {response.text}")
    except Exception as e:
        print(f"wyjątek podczas aktualizacji stock_available: {e}")


def create_product(product, category_id):
    try:
        description_unicode = replace_czech_characters(product['description'])
        data = f"""
        <prestashop>
          <product>
            <name>
              <language id="1">{escape(product['name'])}</language>
            </name>
            <price>{product['price']}</price>
            <weight>{product['weight']}</weight>
            <depth>{product['depth']}</depth>
            <height>{product['height']}</height>
            <width>{product['width']}</width>
            <active>1</active>
            <id_category_default>{category_id}</id_category_default>
            <id_tax_rules_group>1</id_tax_rules_group>
            <state>1</state>
            <available_for_order>1</available_for_order>
            <show_price>1</show_price>
            <visibility>both</visibility>
            <condition>new</condition>
            <description>
              <language id="1">{description_unicode}</language>
            </description>          
            <associations>
              <categories>
                <category>
                  <id>{category_id}</id>
                </category>
              </categories>
            </associations>
          </product>
        </prestashop>
        """
        response = requests.post(f"{API_URL}/products", auth=auth, data=data, verify=False)

        if response.status_code == 201:
            soup = BeautifulSoup(response.content, "xml")
            product_id = soup.find("id").text
            print(f"Produkt '{product['name']}' został utworzony z id: {product_id}.")
            
            stock_available_id = get_stock_available_id(product_id)
            if stock_available_id:
                update_stock_quantity(stock_available_id, product['stock'], product_id)

            for image_path in product['images']:
                add_image_to_product(product_id, image_path)
        else:
            print(f"błąd podczas tworzenia produktu '{product['name']}': {response.text}")
    except Exception as e:
        print(f"wyjątek podczas tworzenia produktu '{product['name']}': {e}")

def add_image_to_product(product_id, image_path):
    url = f"{API_URL}/images/products/{product_id}"
    with open(image_path, 'rb') as img_file:
        files = {'image': img_file}
        headers = {"Authorization": f"Bearer {API_KEY}"}
        response = requests.post(url, auth=auth, files=files, verify=False)
        if response.status_code == 200:
            print(f"zdjęcie {image_path} dodane do produktu ID: {product_id}.")
        else:
            print(f"błąd dodawania zdjęcia {image_path}: {response.content}")

def process_directory(base_path, parent_id=2):
    for item in os.listdir(base_path):
        item_path = os.path.join(base_path, item)
        if os.path.isdir(item_path):  
            print(f"przetwarzanie katalogu: {item}")
            category_id = create_category(item, parent_id)
            if category_id:
                process_directory(item_path, category_id)
        elif item == "product.txt":  
            print(f"przetwarzanie produktów w katalogu: {base_path}")
            with open(item_path, 'r', encoding='utf-8', errors='replace') as f:
                for line in f:
                    parts = line.strip().split('|')
                    if len(parts) >= 11:  
                        product = {
                            'name': parts[0].strip(),
                            'stock': int(parts[1].strip()) if parts[1].strip().isdigit() else 0,
                            'images': [
                                os.path.join(base_path, parts[2].strip()),
                                os.path.join(base_path, parts[3].strip()) if parts[3].strip() else None
                            ],
                            'price': float(parts[4].strip()) if parts[4].strip() else 0.0,
                            'width': float(parts[6].strip().replace(',', '.')) if parts[6].strip() else 0.0,
                            'height': float(parts[7].strip().replace(',', '.')) if parts[7].strip() else 0.0,
                            'depth': float(parts[5].strip().replace(',', '.')) if parts[5].strip() else 0.0,
                            'weight': float(parts[8].strip().replace(',', '.'))/1000 if parts[8].strip() else 0.0,
                            'volume': float(parts[9].strip().replace(',', '.')) if parts[9].strip() else 0.0,
                            'description': (parts[10].strip()),
                        }
                        create_product(product, parent_id)

if __name__ == "__main__":
    urllib3.disable_warnings(urllib3.exceptions.InsecureRequestWarning)
    base_path = "/media/DISK1/kategorie"
    process_directory(base_path)
