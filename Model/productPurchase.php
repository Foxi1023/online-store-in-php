<?php
require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

$model = new ProductModel();
$view = new ProductView(); 
$controller = new ProductController($model, $view);

if(session_status() === PHP_SESSION_NONE) session_start();
if (!isset($_SESSION["goodsBasket"])) {}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    foreach ($_SESSION["goodsBasket"] as $value) {
        echo $value["id"];
        echo "<br>";
        echo $value["count"];
        
        $id = $value["id"];
        
        $res = $controller->getProduct($id)->fetch_assoc();
        $total = $res["count"];

        $count = $total - $value["count"];

        $controller->changeProductQuantity($id, $count);
    }

    
    $_SESSION["goodsBasket"] = [];
    $_SESSION["allGoods"] = 0;
}

/* header('Location: ../View/basketPage.php'); */

?>