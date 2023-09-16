<?php
session_start();

require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

$model = new ProductModel();
$view = new ProductView(); 
$controller = new ProductController($model, $view);


$controller->viewProduct($_POST["id"]);
$controller->viewProduct($_SESSION["productsBasket"]);


// Добавление продукта в корзину
function addProduct($id, $name, $price, $count) {
    $product = [
        'id' => $id,
        'name' => $name,
        'price' => $price,
        'count' => $count,
    ];
    $_SESSION["allPrice"]+= $price * $count;
    
    $index = array_search($id, array_column($_SESSION["productsBasket"], 'id'));

    if ($index !== false) {
    $_SESSION["productsBasket"][$index] = $product;
    } else {
    $_SESSION["productsBasket"][] = $product;
    }
}

addProduct($_POST["id"],$_POST["name"],$_POST["price"],$_POST["count"]);

header('Location: ../View/index.php');



?>