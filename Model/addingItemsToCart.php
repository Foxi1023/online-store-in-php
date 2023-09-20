<?php
require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

$model = new ProductModel();
$view = new ProductView(); 
$controller = new ProductController($model, $view);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(session_status() === PHP_SESSION_NONE) session_start();
    
    
    // Добавление продукта в корзину
    function addProduct($id, $name, $price, $count, $img) {
        if (isset($_SESSION["goodsBasket"])) {
            $product = [
                'id' => $id,
                'name' => $name,
                'price' => $price,
                'count' => $count,
                'img' => $img
            ];
            
            $_SESSION["allGoods"]+= $price * $count;

            $index = array_search($id, array_column($_SESSION["goodsBasket"], 'id'));
            
            if ($index !== false) {
                $count_old = $_SESSION["goodsBasket"][$index]["count"];
                $product["count"] += $count_old;
                $_SESSION["goodsBasket"][$index] = $product;
            } else {
                $_SESSION["goodsBasket"][] = $product;
            }
        } else {
            $_SESSION["goodsBasket"] = [];
            $_SESSION["allGoods"] = 0;
        }
        
    }
    
    addProduct($_POST["id"], $_POST["name"], $_POST["price"], $_POST["count"], $_POST["img"]);
}

header('Location: ../View/index.php');



?>