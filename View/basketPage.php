<?php 
include_once("Template/header.php");

require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

session_start();

$model = new ProductModel();
$view = new ProductView(); 
$controller = new ProductController($model, $view);
?>

<body>
    <main>
        <link rel="stylesheet" href="../View/css/style.css">
        <div class="forms">
            <form action="../Model/emptyTrash.php" method="post">
                <input type="submit" value="Очистить">
            </form>
            <form action="../Model/emptyTrash.php" method="post">
                <input type="submit" value="Потвердить покупку">
            </form>
        </div>
        <h2>Общая стоимость: <?php echo $_SESSION["allPrice"];?>
            <?php
                if (isset($_SESSION["productsBasket"])) {
                    $controller->viewProductsInCart($_SESSION["productsBasket"]);
                }
            ?>
        </h2>
    </main>
</body>