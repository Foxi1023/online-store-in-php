<?php 
include_once("Template/header.php");

require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

if(session_status() === PHP_SESSION_NONE) session_start();

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
        <h2>Общая стоимость: <?php echo $_SESSION["allGoods"];?></h2>
        <h2>Всего товаров: <?php echo count($_SESSION["goodsBasket"]);?></h2>
        <?php
            $controller->viewProductsInCart($_SESSION["goodsBasket"]);
        ?>

    </main>
</body>