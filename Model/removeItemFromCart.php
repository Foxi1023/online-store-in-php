<?php
require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

$model = new ProductModel();
$view = new ProductView(); 
$controller = new ProductController($model, $view);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(session_status() === PHP_SESSION_NONE) session_start();
    
    
    $id = $_POST["delid"];
    $index = array_search($id, array_column($_SESSION["goodsBasket"], 'id'));

    if ($index !== false) {
        $removedProduct = $_SESSION["goodsBasket"][$index];
        $_SESSION["allGoods"] -= $removedProduct['price'] * $removedProduct['count'];
        array_splice($_SESSION["goodsBasket"], $index, 1); // Удаляем один элемент
    }
}

header('Location: ../View/basketPage.php');

?>