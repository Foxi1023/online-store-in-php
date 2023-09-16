<?php 
include_once("Template/header.php");
require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $model = new ProductModel();
    $view = new ProductView(); 
    $controller = new ProductController($model, $view);

    $controller->removeProduct($id);

    header('Location: ../View/index.php');
}

?>