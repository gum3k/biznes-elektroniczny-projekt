from selenium import webdriver
from selenium.webdriver.firefox.service import Service
from selenium.webdriver.common.by import By
from selenium.webdriver.firefox.options import Options
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time
from time import sleep
from SeleniumImagoTester import SeleniumImagoTester

def generate_unique_email(base_email: str) -> str:
    local_part, domain = base_email.split('@')
    timestamp = int(time.time())
    unique_email = f"{local_part}{timestamp}@{domain}"
    return unique_email


if __name__ == "__main__":
    automation = SeleniumImagoTester(geckodriver_path='geckodriver', base_url='https://localhost/index.php')

    # testing
    automation.home_page()
    automation.register(
        gender="male", 
        first_name="Karol",
        last_name="Wojtyła",
        email=generate_unique_email("julek.g@ej.com"),
        password="12345",
        birthday="2001-09-11"
    )
    automation.add_product_to_cart(category="Geek domácnost", products_amount=3, product_quantity_min=1, product_quantity_max=10)
    automation.add_product_to_cart(category="Hry na hrdiny (RPG)", products_amount=2, product_quantity_min=1, product_quantity_max=10)
    automation.remove_products(3)

    sleep(20)

    automation.quit_driver()
