<?php 
require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

$model = new ProductModel();
$view = new ProductView(); 
$controller = new ProductController($model, $view);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(session_status() === PHP_SESSION_NONE) session_start();

    
    $_SESSION["goodsBasket"] = [];
    $_SESSION["allGoods"] = 0;
}


header('Location: ../View/basketPage.php');
?>