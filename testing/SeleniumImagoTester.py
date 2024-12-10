from selenium import webdriver
from selenium.webdriver.firefox.service import Service
from selenium.webdriver.firefox.options import Options
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support.ui import Select
from selenium.common.exceptions import NoSuchElementException
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.by import By
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.common.keys import Keys
from time import sleep
import random

TIMEOUT = 10
LONG_TIMEOUT = 60

class SeleniumImagoTester:
    def __init__(self, driver_path: str, base_url: str):
        self.driver_path = driver_path
        self.base_url = base_url
        self.options = Options()
        self.options.add_argument('--ignore-certificate-errors')
        self.options.add_argument('--ignore-ssl-errors')
        self.options.add_argument('--disable-dev-shm-usage') 
        self.service = Service(executable_path=self.driver_path)
        self.driver = webdriver.Firefox(service=self.service, options=self.options)
        self.actions = ActionChains(self.driver)
    
    def home_page(self):
        self.driver.get(self.base_url)


    def wait_for_clickable(self, locator):
        return WebDriverWait(self.driver, TIMEOUT).until(
            EC.element_to_be_clickable(locator)
        )
    def wait_for_presence(self, locator):
        return WebDriverWait(self.driver, TIMEOUT).until(
            EC.presence_of_element_located(locator)
        )
    def wait_for_presence_all(self, locator):
        return WebDriverWait(self.driver, TIMEOUT).until(
            EC.presence_of_all_elements_located(locator)
        )
    def find_products(self):
        return WebDriverWait(self.driver, TIMEOUT).until(
            EC.presence_of_all_elements_located((By.XPATH, f"//*[contains(@class, 'js-product product') ]"))
        )
    def wait_for_refresh(self, element):
        WebDriverWait(self.driver, LONG_TIMEOUT).until(EC.staleness_of(element))
    def wait_for_reload(self, current_url):
        WebDriverWait(self.driver, LONG_TIMEOUT).until(EC.url_changes(current_url))
    def wait_for_responsive(self):
        self.wait_for_clickable((By.XPATH, f"//a[@href='https://localhost/index.php']"))

    def scroll_to_click(self, element):
        self.driver.execute_script("arguments[0].scrollIntoView({behavior: 'smooth', block: 'center'});", element)
        element.click()

    def click_by_anything(self, locator):
        element = self.wait_for_clickable(locator)
        self.scroll_to_click(element)
        return element
    def click_submit_button(self):
        element = self.click_by_anything((By.CSS_SELECTOR, 'button[type="submit"]'))
        return element
    def click_by_text(self, text):
        element = self.click_by_anything((By.XPATH, f"//*[text()='{text}']"))
        return element
    def click_by_name(self, name):
        element = self.click_by_anything((By.NAME, name))
        return element
    def click_by_link(self, link):
        element = self.click_by_anything((By.XPATH, f"//a[@href='{link}']"))
        return element
    def click_by_class(self, class_name):
        element = self.click_by_anything((By.CLASS_NAME, class_name))
        return element
    def click_element(self, locator):
        element = self.driver.find_element(locator[0], locator[1])
        self.driver.execute_script("arguments[0].scrollIntoView(true);", element)
        self.scroll_to_click(element)
        

    def register(self, gender: str, first_name: str, last_name: str, email: str, password: str, birthday: str):
        self.click_by_link("https://localhost/index.php?controller=my-account")                      
        self.click_by_link("https://localhost/index.php?controller=authentication&create_account=1") 

        self.wait_for_presence((By.ID, "customer-form"))
        
        if gender == "male":
            self.scroll_to_click(self.driver.find_element(By.ID, "field-id_gender-1"))
        elif gender == "female":
            self.scroll_to_click(self.driver.find_element(By.ID, "field-id_gender-2"))
        self.driver.find_element(By.ID, "field-firstname").send_keys(first_name)
        self.driver.find_element(By.ID, "field-lastname").send_keys(last_name)
        self.driver.find_element(By.ID, "field-email").send_keys(email)
        self.driver.find_element(By.ID, "field-password").send_keys(password)
        self.driver.find_element(By.ID, "field-birthday").send_keys(birthday)
        self.click_element((By.NAME, "customer_privacy"))
        self.click_element((By.NAME, "psgdpr"))
        # self.scroll_to_click(self.driver.find_element(By.NAME, "optin"))

        current_url = self.driver.current_url
        self.click_submit_button()
        self.wait_for_reload(current_url)


    def choose_quantity(self, product_quantity_min=1, product_quantity_max=1):
        self.click_by_link("#product-details")
        stock_element = self.wait_for_presence((By.XPATH, "//span[@data-stock]"))
        stock_value = int(stock_element.get_attribute("data-stock"))
        product_quantity_max = min(product_quantity_max, stock_value)
        random_quantity = random.randint(product_quantity_min, product_quantity_max)
        quantity_input = self.wait_for_presence((By.ID, "quantity_wanted"))
        self.driver.execute_script("arguments[0].value = '';", quantity_input)
        quantity_input.send_keys(str(random_quantity))


    def search_product(self, product_name):
        search_box = self.wait_for_presence((By.CSS_SELECTOR, 'input[name="s"]'))
        search_box.clear()
        search_box.send_keys(product_name)
        current_url = self.driver.current_url
        search_box.send_keys(Keys.ENTER)
        self.wait_for_reload(current_url)
        self.wait_for_presence_all((By.CLASS_NAME, 'product-miniature'))


    def get_available_products(self):
        self.wait_for_presence_all((By.CLASS_NAME, 'thumbnail.product-thumbnail'))
        products = self.find_products()
        available_products = []
        for product in products:
            try:
                product.find_element(By.XPATH, ".//li[contains(@class, 'product-flag out_of_stock')]")
                continue
            except:
                available_products.append(product)
        return available_products
    

    def add_product_to_cart(self, product, product_quantity_min=1, product_quantity_max=1):
        self.scroll_to_click(product)
        self.choose_quantity(product_quantity_min=product_quantity_min, product_quantity_max=product_quantity_max)
        self.click_submit_button()
        self.click_by_anything((By.XPATH, '//div[@class="cart-content"]//button[@class="btn btn-secondary" and @data-dismiss="modal"]'))
        self.wait_for_responsive()
    
    
    def random_page(self):
        self.wait_for_presence_all((By.CSS_SELECTOR, 'ul.page-list a.js-search-link'))
        page_links = self.driver.find_elements(By.CSS_SELECTOR, 'ul.page-list a.js-search-link')
        valid_page_links = [link for link in page_links if link.text.strip().isdigit()]
        random_link = random.choice(valid_page_links)
        self.wait_for_clickable(random_link)
        self.scroll_to_click(random_link)
        self.wait_for_refresh(random_link)


    
    def add_random_product_to_cart(self, product_quantity_min=1, product_quantity_max=1):
        products = []
        self.random_page()
        products = self.get_available_products()
        while products == []:
            self.random_page()
            products = self.get_available_products()
        product = random.choice(products)
        self.add_product_to_cart(product, product_quantity_min, product_quantity_max)


    def add_products_to_cart(self, products_amount=5, category=None, product_quantity_min=1, product_quantity_max=1):
        self.home_page()
        if category:
            self.click_by_text(category)

        for i in range(products_amount):
            products = self.get_available_products()
            while products == [] or i >= len(products):
                self.random_page()
                products = self.get_available_products()
            product = products[i]

            self.add_product_to_cart(product, product_quantity_min, product_quantity_max)

            self.home_page()
            if category:
                self.click_by_text(category)


    def remove_products(self, n):
        self.click_by_link("//localhost/index.php?controller=cart&action=show")
        for _ in range(n):
            element = self.click_by_class("remove-from-cart")
            WebDriverWait(self.driver, TIMEOUT).until(
                EC.invisibility_of_element(element)
            )


    def fill_field(self, id, value):
        element = self.driver.find_element(By.ID, id)
        element.clear()
        element.send_keys(value)


    def fill_address_form(self, address):
        try:
            existing_address = self.driver.find_element(By.XPATH, f"//article[contains(@class, 'address-item') and input[@type='radio' and @checked]]")
            if existing_address:
                return
        except NoSuchElementException:
            pass
        self.fill_field("field-alias", address["alias"])
        self.fill_field("field-firstname", address["first_name"])
        self.fill_field("field-lastname", address["last_name"])
        self.fill_field("field-company", address["company"])
        self.fill_field("field-vat_number", address["vat_number"])
        self.fill_field("field-address1", address["address1"])
        self.fill_field("field-address2", address["address2"])
        self.fill_field("field-postcode", address["postcode"])
        self.fill_field("field-city", address["city"])
        country_select = Select(self.driver.find_element(By.ID, "field-id_country"))
        country_select.select_by_visible_text(address["country"])
        self.fill_field("field-phone", address["phone"])
        
        self.click_by_name("confirm-addresses")



    def select_delivery(self, delivery_name):
        delivery_options = self.wait_for_presence_all((By.CLASS_NAME, 'delivery-option'))

        for option in delivery_options:
            carrier_name_element = option.find_element(By.CLASS_NAME, 'carrier-name')
            if carrier_name_element and carrier_name_element.text.strip() == delivery_name:
                radio_button = option.find_element(By.XPATH, './/input[@type="radio"]')
                if not radio_button.is_selected():
                    self.scroll_to_click(radio_button)
                break
        self.click_by_name("confirmDeliveryOption")


    def select_payment(self, payment_method_name):
        self.wait_for_presence_all((By.CLASS_NAME, 'payment-option'))
        payment_radio_button = self.driver.find_element(By.CSS_SELECTOR, f"input[data-module-name='{payment_method_name}']")
        self.scroll_to_click(payment_radio_button)

        terms_checkbox = self.driver.find_element(By.ID, "conditions_to_approve[terms-and-conditions]")
        if not terms_checkbox.is_selected():
            self.scroll_to_click(terms_checkbox)
        current_url = self.driver.current_url
        self.click_by_anything((By.CSS_SELECTOR, ".btn.btn-primary.center-block"))
        self.wait_for_reload(current_url)

        
    def order(self, order_data):
        self.click_by_link("//localhost/index.php?controller=cart&action=show")
        self.click_by_link("https://localhost/index.php?controller=order")
        self.fill_address_form(order_data["address"])
        self.select_delivery(order_data["delivery"])
        self.select_payment(order_data["payment"])


    def check_order_status(self):
        self.click_by_link("https://localhost/index.php?controller=my-account")
        self.click_by_link("https://localhost/index.php?controller=history")
        self.click_by_anything((By.XPATH, f"//a[contains(@href, 'https://localhost/index.php?controller=order-detail')]"))


    def download_invoice(self):
        self.click_by_link("https://localhost/index.php?controller=my-account")
        self.click_by_link("https://localhost/index.php?controller=history")
        self.click_by_anything((By.XPATH, f"//a[contains(@href, 'https://localhost/index.php?controller=pdf-invoice')]"))
        

    def quit_driver(self):
        self.driver.quit()