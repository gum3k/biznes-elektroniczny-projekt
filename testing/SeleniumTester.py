from selenium import webdriver
from selenium.webdriver.firefox.service import Service
from selenium.webdriver.common.by import By
from selenium.webdriver.firefox.options import Options
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time
from time import sleep

class SeleniumTester:
    def __init__(self, geckodriver_path: str, base_url: str):
        self.geckodriver_path = geckodriver_path
        self.base_url = base_url
        
        self.options = Options()
        self.service = Service(executable_path=self.geckodriver_path)
        
        self.driver = webdriver.Firefox(service=self.service, options=self.options)
    
    def open_website(self):
        self.driver.get(self.base_url)

    def click_login_button(self):
        log_in_button = WebDriverWait(self.driver, 10).until(
            EC.presence_of_element_located((By.XPATH, '//a[@href="https://localhost/index.php?controller=my-account"]'))
        )
        log_in_button.click()

    def click_register_button(self):
        register_button = WebDriverWait(self.driver, 10).until(
            EC.presence_of_element_located((By.XPATH, '//a[@href="https://localhost/index.php?controller=authentication&create_account=1"]'))
        )
        register_button.click()

    def register(self, gender: str, first_name: str, last_name: str, email: str, password: str, birthday: str):
        WebDriverWait(self.driver, 10).until(
            EC.presence_of_element_located((By.ID, "customer-form"))
        )

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

        submit_button = WebDriverWait(self.driver, 10).until(
            EC.element_to_be_clickable((By.CSS_SELECTOR, 'button[type="submit"]'))
        )
        submit_button.click()

    def quit_driver(self):
        self.driver.quit()
