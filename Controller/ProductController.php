<?php 

class ProductController {
    private $model;
    private $view;

    public function __construct(ProductModel $model, ProductView $view) {
        $this->model = $model;
        $this->view = $view;
    }

    // Добавление товара
    public function addProduct($name, $price, $description, $count, $img) {
        $this->model->addProduct($name, $price, $description, $count, $img);
    }

    // Удаление товара
    public function removeProduct($id) {
        $this->model->removeProduct($id);
    }
    // Изменение товара
    public function UpdateProduct($id,$name, $price, $description, $count, $img) {
        $this->model->UpdateProduct($id,$name, $price, $description, $count, $img);
    }

    // Получение списока продуктов
    public function listProducts() {
        $products = $this->model->getAllProducts();
        // Вызов представления, чтобы отобразить список продуктов
        $this->view->displayProducts($products);
    }

    // Получение продукта по id
    public function viewProduct($id) {
        $product = $this->model->getProductById($id);
        $this->view->displayProducts($product);
    }

    // Получение продукта
    public function viewProductsInCart($id) {
        $this->view->DisplayProductsInCart($id);
    }

    // Получение продукта
    public function viewProductPage($id) {
        $product = $this->model->getProductById($id);
        $this->view->DisplayProductPage($product);
    }
    public function getProduct($id) {
        $product = $this->model->getProductById($id);
        return $product;
    }
    
    function changeProductQuantity($id, $count) {
        $this->model->changeProductQuantity($id, $count);
    }
}


?>