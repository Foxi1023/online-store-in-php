<?php 
include_once("Template/header.php");

require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

$model = new ProductModel();
$view = new ProductView(); 
$controller = new ProductController($model, $view);
?>

<main>
    <link rel="stylesheet" href="../View/css/styleCard.css">
    <div class="row">
        <?php 
            $controller->listProducts();
        ?>
    </div>
</main>

<?php include_once '../View/Template/footer.php'; ?>