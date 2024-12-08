from selenium import webdriver
from selenium.webdriver.firefox.service import Service
from selenium.webdriver.firefox.options import Options
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.by import By
from selenium.common.exceptions import NoSuchElementException
import random

TIMEOUT = 10

class SeleniumImagoTester:
    def __init__(self, geckodriver_path: str, base_url: str):
        self.geckodriver_path = geckodriver_path
        self.base_url = base_url
        self.options = Options()
        self.service = Service(executable_path=self.geckodriver_path)
        self.driver = webdriver.Firefox(service=self.service, options=self.options)
    
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

    def click_submit_button(self):
        element = self.click_by_anything(locator=(By.CSS_SELECTOR, 'button[type="submit"]'))
        return element
    def click_by_text(self, text):
        element = self.click_by_anything(locator=(By.XPATH, f"//*[text()='{text}']"))
        return element
    def click_by_link(self, link):
        element = self.click_by_anything(locator=(By.XPATH, f"//a[@href='{link}']"))
        return element
    def click_by_class(self, class_name):
        element = self.click_by_anything(locator=(By.CLASS_NAME, class_name))
        return element
    def click_by_anything(self, locator):
        element = self.wait_for_clickable(locator)
        element.click()
        return element
        

    def register(self, gender: str, first_name: str, last_name: str, email: str, password: str, birthday: str):
        self.click_by_link("https://localhost/index.php?controller=my-account")                         # log in button
        self.click_by_link("https://localhost/index.php?controller=authentication&create_account=1")    # register button

        self.wait_for_presence(locator=(By.ID, "customer-form"))
        
        # filling form
        if gender == "male":
            self.driver.find_element(By.ID, "field-id_gender-1").click()
        elif gender == "female":
            self.driver.find_element(By.ID, "field-id_gender-2").click()
        self.driver.find_element(By.ID, "field-firstname").send_keys(first_name)
        self.driver.find_element(By.ID, "field-lastname").send_keys(last_name)
        self.driver.find_element(By.ID, "field-email").send_keys(email)
        self.driver.find_element(By.ID, "field-password").send_keys(password)
        self.driver.find_element(By.ID, "field-birthday").send_keys(birthday)
        self.driver.find_element(By.NAME, "customer_privacy").click()
        self.driver.find_element(By.NAME, "psgdpr").click()
        # self.driver.find_element(By.NAME, "optin").click()

        self.click_submit_button()


    def choose_quantity(self, product_quantity_min=1, product_quantity_max=1):
        self.click_by_link("#product-details")
        stock_element = self.wait_for_presence(locator=(By.XPATH, "//span[@data-stock]"))
        stock_value = int(stock_element.get_attribute("data-stock"))
        product_quantity_max = min(product_quantity_max, stock_value)
        random_quantity = random.randint(product_quantity_min, product_quantity_max)
        quantity_input = WebDriverWait(self.driver, TIMEOUT).until(
            EC.presence_of_element_located((By.ID, "quantity_wanted"))
        )
        self.driver.execute_script("arguments[0].value = '';", quantity_input)
        quantity_input.send_keys(str(random_quantity))

    def add_product_to_cart(self, products_amount=5, category=None, product_quantity_min=1, product_quantity_max=1):
        self.home_page()
        if category:
            self.click_by_text(category)
    
        for i in range(products_amount):
            products = WebDriverWait(self.driver, TIMEOUT).until(
                EC.presence_of_all_elements_located((By.CLASS_NAME, 'thumbnail.product-thumbnail'))
            )

            if i >= len(products):
                break

            product = products[i]
        
            self.click_by_anything(product)


            add_to_cart_button = self.wait_for_presence(locator=(By.CSS_SELECTOR, 'button.add-to-cart'))
            if not add_to_cart_button.is_enabled():
                products_amount += 1
                self.home_page()
                if category:
                    self.click_by_text(category)
                continue

            self.choose_quantity(product_quantity_min=product_quantity_min, product_quantity_max=product_quantity_max)
            self.click_submit_button()

            self.click_by_anything(locator=(By.XPATH, '//div[@class="cart-content"]//button[@class="btn btn-secondary" and @data-dismiss="modal"]'))
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


    def quit_driver(self):
        self.driver.quit()
