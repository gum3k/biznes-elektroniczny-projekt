import time
from time import sleep
from SeleniumImagoTester import SeleniumImagoTester
from selenium.webdriver.common.action_chains import ActionChains

def generate_unique_email(base_email: str) -> str:
    local_part, domain = base_email.split('@')
    timestamp = int(time.time())
    unique_email = f"{local_part}{timestamp}@{domain}"
    return unique_email

def slow_scroll_down(driver):
    actions = ActionChains(driver)
    num_scrolls = 500
    scroll_distance = 2
    pause_time = 0.005

    for _ in range(num_scrolls):
        actions.scroll_by_amount(0, scroll_distance).perform()
        time.sleep(pause_time)


if __name__ == "__main__":
    tester = SeleniumImagoTester(driver_path='/usr/bin/chromedriver', base_url='https://localhost/index.php')

    order_data = {
        "address": {
            "alias": "Address",
            "first_name": "Jan",        
            "last_name": "Rogowski",         
            "company": "Intel",
            "vat_number": "4204202137",  
            "address1": "Rogowska 69", 
            "address2": "Apt 4B",    
            "postcode": "69-420",       
            "city": "Utoya",            
            "country": "Polska",        
            "phone": "14886969"       
        },
        "delivery": "DHL",              # My carrier / InPost / DHL / Imago
        "payment": "ps_cashondelivery"  # ps_wirepayment / ps_cashondelivery / sumuppaymentgateway
    }
    
    tester.driver.maximize_window()
    tester.home_page()
    tester.register(
        gender="male", 
        first_name="Jay",
        last_name="Rog",
        email=generate_unique_email("julek.g@ej.com"),
        password="12345",
        birthday="2001-09-11"
    )
    tester.search_product("minecraft")
    tester.get_available_products()
    tester.add_random_product_to_cart(product_quantity_min=1, product_quantity_max=10)
    tester.add_products_to_cart(category="Geek domácnost", products_amount=5, product_quantity_min=1, product_quantity_max=10)
    tester.add_products_to_cart(category="Hry na hrdiny (RPG)", products_amount=5, product_quantity_min=1, product_quantity_max=10)
    tester.remove_products(3)
    tester.order(order_data)
    tester.check_order_status()
    slow_scroll_down(tester.driver)
    tester.download_invoice()

    tester.quit_driver()