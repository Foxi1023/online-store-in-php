<link rel="stylesheet" href="../View/css/styleCard.css">
<?php
include_once("Template/header.php");

require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

$model = new ProductModel();
$view = new ProductView(); 
$controller = new ProductController($model, $view);

if(session_status() === PHP_SESSION_NONE) session_start();

if (!isset($_POST["id"])) {
    header('Location: ../View/index.php');
}

$controller->viewProductPage($_POST["id"]);

?>