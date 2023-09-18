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
    public function viewProduct($productId) {
        $product = $this->model->getProductById($productId);
        $this->view->displayProducts($product);
    }

    // Получение продукта
    public function viewProductsInCart($productId) {
        $this->view->DisplayProductsInCart($productId);
    }

    // Получение продукта
    public function viewProductPage($productId) {
        $this->view->DisplayProductPage($productId);
    }
}


?>