<?php 
session_start();

require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

$model = new ProductModel();
$view = new ProductView(); 
$controller = new ProductController($model, $view);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["productsBasket"] = [];
    $_SESSION["allPrice"] = 0;
}


header('Location: ../View/basketPage.php');
?>