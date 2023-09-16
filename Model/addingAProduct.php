<?php
require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";


$model = new ProductModel();
$view = new ProductView(); 
$controller = new ProductController($model, $view);

echo $_POST["name"];
echo $_POST["description"];
echo $_POST["price"];
echo $_POST["count"];


// Получение данных из формы
$name = $_POST["name"];
$description = $_POST["description"];
$price = $_POST["price"];
$count = $_POST["count"];


$controller->addProduct($name,$price,$description,$count);

header('Location: ../View/index.php');

?>