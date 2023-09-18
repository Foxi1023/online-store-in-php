<?php
session_start();

require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $model = new ProductModel();
    $view = new ProductView(); 
    $controller = new ProductController($model, $view);
    
    // Добавление продукта в корзину
    function addProduct($id, $name, $price, $count,$img) {
        if (isset($_SESSION["productsBasket"])) {
            $product = [
                'id' => $id,
                'name' => $name,
                'price' => $price,
                'count' => $count,
                'img' => $img
            ];
            
            $_SESSION["allPrice"]+= $price * $count;

            $index = array_search($id, array_column($_SESSION["productsBasket"], 'id'));
            
            if ($index !== false) {
                $_SESSION["productsBasket"][$index] = $product;
            } else {
                $_SESSION["productsBasket"][] = $product;
            }
        } else {
            $_SESSION["productsBasket"] = [];
            $_SESSION["allPrice"] = 0;
            $_SESSION["allCount"] = 0;
        }
        
    }
    
    addProduct($_POST["id"],$_POST["name"],$_POST["price"],$_POST["count"],$_POST["img"]);
} else {
    echo "error";
}

header('Location: ../View/index.php');



?>