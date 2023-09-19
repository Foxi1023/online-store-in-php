<?php

class ProductView {
    // Изображение товара на гл. странице
    public function displayProducts($products) {
        foreach ($products as $product) {
            echo '
            <div class="card">
            <img src="../img/'.$product["img"].'.png" alt="img">
                <div class="discrip">
                <h2>' . $product["name"] . '</h2>
                <h5>Цена: ' . $product["price"] . ' руб.</h5>
                <h5>Кол-во: '.$product["count"].' шт.</h5>
                <p>' . $product["description"] . '</p>
                <div class="buttons">
                    <form action="../Model/addingItemsToCart.php" method="post" enctype="multipart/form-data">
                        <input style="display:none;" name="id" value="'.$product["id"].'">
                        <input style="display:none;" name="img" value="'.$product["img"].'">
                        <input style="display:none;" name="price" value="'.$product["price"].'">
                        <input style="display:none;" name="name" value="'.htmlentities($product["name"]).'">
                        <input type="number" max="'.$product["count"].'" min="1" name="count" value="1">
                        <input type="submit" value="В корзину">
                    </form>
                    <form action="../View/ProductPage.php" method="post">
                        <input style="display:none;" name="id" value="'.$product["id"].'">
                        <input type="submit" value="Подробнее">
                    </form>
                    </div>
                </div>
            </div>';
        }
    }
    // Изображение товара в корзине
    public function DisplayProductsInCart($products) {
        foreach ($products as $product) {
            echo '
                <div class="card">
                    <img src="../img/'.$product["img"].'.png" alt="img">
                    <div class="discrip">
                        <h2>' . $product["name"] . '</h2>
                        <h5>Цена: ' . $product["price"] . ' руб.</h5>
                        <h5>Кол-во: '.$product["count"].' шт.</h5>
                        <div class="buttons">
                            <form action="../Model/removeItemFromCart.php" method="post">
                                <input style="display:none;" name="delid" value="'.$product["id"].'">
                                <input type="submit" value="удалить">
                            </form>
                        </div>
                        </div>
                    </div>
                </div>';
        }
    }
    // Изображение товара на странице товара
    public function DisplayProductPage($products) {
        foreach ($products as $product) {
            echo '
            <div class="card">
            <img src="../img/'.$product["img"].'.png" alt="img">
                <div class="discrip">
                <form action="../Model/addingItemsToCart.php" method="post">
                    <h2>' . $product["name"] . '</h2>
                    <h5>Цена: ' . $product["price"] . ' руб.</h5>
                    <h5>Кол-во: '.$product["count"].' шт.</h5>
                    <p>Описание</p>
                    <p>' . $product["description"] . '</p>
                    <div class="buttons">
                        <input style="display:none;" name="img" value="'.$product["img"].'">
                        <input style="display:none;" name="name" value="'.htmlentities($product["name"]).'">
                        <input style="display:none;" name="id" value="'.$product["id"].'">
                        <input style="display:none;" name="price" value="'.$product["price"].'">
                        <input type="number" max="'.$product["count"].'" min="1" name="count" value="1">
                        <input type="submit" value="В корзину">
                    </div>
                </form>
                </div>
            </div>';
        }
    }
}
?>