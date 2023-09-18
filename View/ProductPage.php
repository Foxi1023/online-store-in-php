<link rel="stylesheet" href="../View/css/styleCard.css">
<?php
include_once("Template/header.php");

require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

session_start();



$model = new ProductModel();
$view = new ProductView(); 
$controller = new ProductController($model, $view);

$controller->viewProductPage($_POST["id"]);
?>