<?php
require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

$model = new ProductModel();
$view = new ProductView(); 
$controller = new ProductController($model, $view);

if(session_status() === PHP_SESSION_NONE) session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    
    $_SESSION["goodsBasket"] = [];
    $_SESSION["allGoods"] = 0;
}

header('Location: ../View/basketPage.php');

?>