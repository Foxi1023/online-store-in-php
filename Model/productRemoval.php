<?php 
include_once("Template/header.php");
require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

    $model = new ProductModel();
    $view = new ProductView(); 
    $controller = new ProductController($model, $view);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $controller->removeProduct($id);

}

header('Location: ../View/index.php');
?>