from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import random
import faker

SHOP = 'https://localhost'
BUCKET_LIST = 'https://localhost/koszyk?action=show'
CREATE_ACCOUNT = 'https://localhost/logowanie?create_account=1'
VIEW_ORDER = 'https://localhost/zamówienie'
ORDER_HISTORY = 'https://localhost/historia-zamowien'

CATEGORIES = ['https://localhost/61-dla-niej', 'https://localhost/67-dla-dziecka']
PRODUCTS_NUMBER = 5
SEARCH_PRODUCT = 'Mag'

def add_product(driver: any , quantity: int) -> None:
        qty_input = WebDriverWait(driver, 10).until(
            EC.visibility_of_element_located((By.NAME, 'qty'))
        )

        driver.execute_script("arguments[0].value = '';", qty_input)
        qty_input.send_keys(quantity)

        add_to_cart_button = driver.find_element(By.CLASS_NAME, 'add-to-cart')

        if add_to_cart_button.get_attribute('disabled'):
            print('Product is out of stock')
            return
            
        add_to_cart_button.click()

        WebDriverWait(driver, 10).until(
            EC.visibility_of_element_located((By.CSS_SELECTOR, '.cart-content'))
        )

def add_products_to_cart(driver: any) -> None:
    for category in CATEGORIES:
        driver.get(category)
        
        WebDriverWait(driver, 10).until(
            EC.presence_of_all_elements_located((By.CLASS_NAME, 'thumbnail'))
        )
        
        products = driver.find_elements(By.CLASS_NAME, 'thumbnail')

        for index in range(len(products)):

            if index == PRODUCTS_NUMBER:
                break

            products = driver.find_elements(By.CLASS_NAME, 'thumbnail')
            product = products[index]

            product.click()

            WebDriverWait(driver, 10).until(
                EC.visibility_of_element_located((By.NAME, 'qty'))
            )
            
            product_quantity = random.randint(1, 3)
            add_product(driver, product_quantity)

            driver.get(category)


def add_product_by_name(driver: any, name: str) -> None:
    search = driver.find_element(By.NAME, 's')
    search.send_keys(name)
    search.submit()


    while True:
        products = driver.find_elements(By.CLASS_NAME, 'thumbnail')
        picked_product = random.choice(products)

        picked_product.click()
        add_to_cart = driver.find_element(By.CLASS_NAME, 'add-to-cart')

        if add_to_cart.get_attribute('disabled'):
            driver.back()
            continue

        add_to_cart.click()

        WebDriverWait(driver, 10).until(
            EC.visibility_of_element_located((By.CSS_SELECTOR, '.cart-content'))
        )

        driver.back()
        break


def delete_picked_products_from_cart(driver: any) -> None:
    driver.get(BUCKET_LIST)

    for _ in range(3):

        WebDriverWait(driver, 10).until(
            EC.visibility_of_all_elements_located((By.CLASS_NAME, 'cart-item'))
        )

        products = driver.find_elements(By.CLASS_NAME, 'cart-item')

        product_to_delete = random.choice(products)
        delete_button = product_to_delete.find_element(By.CLASS_NAME, 'remove-from-cart')
        delete_button.click()

        WebDriverWait(driver, 10).until(
            EC.staleness_of(product_to_delete)
        )


def register_new_account(driver: any) -> None:
    driver.get(CREATE_ACCOUNT)

    username = faker.Faker().name().split(' ')

    first_name = driver.find_element(By.NAME, 'firstname')
    first_name.send_keys(username[0])

    last_name = driver.find_element(By.NAME, 'lastname')
    last_name.send_keys(username[1])

    email = driver.find_element(By.NAME, 'email')
    email.send_keys(f'{username[0].lower()}.{username[1].lower()}@gmail.com')

    password = driver.find_element(By.NAME, 'password')
    password.send_keys('password')

    customer_privacy = driver.find_element(By.NAME, 'customer_privacy')
    customer_privacy.click()

    terms_of_service = driver.find_element(By.NAME, 'psgdpr')
    terms_of_service.click()

    submit = driver.find_element(By.CLASS_NAME, 'form-control-submit')
    submit.click()


def submit_order(driver: any) -> None:
    driver.get(VIEW_ORDER)

    address = driver.find_element(By.NAME, 'address1')
    address.send_keys('Test Street 1')

    postcode = driver.find_element(By.NAME, 'postcode')
    postcode.send_keys('00-000')

    city = driver.find_element(By.NAME, 'city')
    city.send_keys('Test City')

    confirm_address_button = driver.find_element(By.NAME, 'confirm-addresses')
    confirm_address_button.click()


    confirm_delivery_button = driver.find_element(By.NAME, 'confirmDeliveryOption')
    confirm_delivery_button.click()

    payment_option = driver.find_element(By.ID, 'payment-option-2')
    payment_option.click()

    confirm_terms = driver.find_element(By.ID, 'conditions_to_approve[terms-and-conditions]')
    confirm_terms.click()

    payment_confirmation_div = driver.find_element(By.ID, 'payment-confirmation')
    confirm_payment_button = payment_confirmation_div.find_element(By.CLASS_NAME, 'btn-primary')
    confirm_payment_button.click()


def check_order_details(driver: any) -> None:
    driver.get(ORDER_HISTORY)

    order = driver.find_elements(By.CLASS_NAME, 'order-actions')
    order_actions = order[0].find_element(By.TAG_NAME, 'a')
    
    order_actions.click()

def download_order_vat_invoice(driver: any) -> None:
    driver.get(ORDER_HISTORY)

    order = driver.find_elements(By.CLASS_NAME, 'hidden-md-down')
    order_actions = order[3].find_element(By.TAG_NAME, 'a')

    order_actions.click()


def __main__():
    driver = webdriver.Chrome()
    driver.maximize_window()
    driver.get(SHOP)

    add_products_to_cart(driver)
    add_product_by_name(driver, SEARCH_PRODUCT)
    delete_picked_products_from_cart(driver)

    register_new_account(driver)
    submit_order(driver)
    check_order_details(driver)
    download_order_vat_invoice(driver)

if __name__ == '__main__':
    __main__()