<?php
session_start();

require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

$model = new ProductModel();
$view = new ProductView(); 
$controller = new ProductController($model, $view);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["delid"];
    $index = array_search($id, array_column($_SESSION["productsBasket"], 'id'));

    if ($index !== false) {
        $removedProduct = $_SESSION["productsBasket"][$index];
        $_SESSION["allPrice"] -= $removedProduct['price'] * $removedProduct['count'];
        array_splice($_SESSION["productsBasket"], $index, 1); // Удаляем один элемент
    }
}

header('Location: ../View/basketPage.php');

?>