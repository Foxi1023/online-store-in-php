<?php
require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $count = $_POST["count"];
    
    $model = new ProductModel();
    $view = new ProductView(); 
    $controller = new ProductController($model, $view);
    
    $controller->UpdateProduct($id, $name, $price, $description, $count);

    header('Location: ../View/index.php');
}

?>