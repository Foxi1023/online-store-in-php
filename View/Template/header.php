<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>online-store-in-php</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>

</head>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link 
                <?php
                if (basename($_SERVER['REQUEST_URI']) == "index.php") {
                    echo "active";}
                ?>" aria-current="page" href="../View/index.php">Гл.Страница</a>
            </li>
            <li class="nav-item">
                <a class="nav-link 
                <?php
                if (basename($_SERVER['REQUEST_URI']) == "basketPage.php") {
                    echo "active";}
                ?>" href="../View/basketPage.php">Корзина</a>
            </li>

            <?php if(session_status() === PHP_SESSION_NONE) session_start(); if (isset($_SESSION["user"])): ?>

            <li class="nav-item">
                <a class="nav-link 
                <?php
                if (basename($_SERVER['REQUEST_URI']) == "productRemovalForm.php") {
                    echo "active";}
                ?>" href="../View/productRemovalForm.php">Удалить товар</a>
            </li>
            <li class="nav-item">
                <a class="nav-link 
                <?php
                if (basename($_SERVER['REQUEST_URI']) == "addingAProductForm.php") {
                    echo "active";}
                ?>" href="../View/addingAProductForm.php">Добавить товар</a>
            </li>
            <li class="nav-item">
                <a class="nav-link 
                <?php
                if (basename($_SERVER['REQUEST_URI']) == "productChangeForm.php") {
                    echo "active";}
                ?>" href="../View/productChangeForm.php">Редактировать товар</a>
            </li>

            <?php endif; ?>

            <li class="nav-item">
                <a class="nav-link
                <?php
                if (basename($_SERVER['REQUEST_URI']) == "loginForm.php" | 
                    basename($_SERVER['REQUEST_URI']) == "registrationForm.php") {
                    echo "active";}
                ?>
                " href=" <?php
                        if(session_status() === PHP_SESSION_NONE) session_start();
                        if (isset($_SESSION["user"])) {
                            echo "../Model/logout.php";
                        } else {
                            echo "../View/loginForm.php";
                        }
                        ?>">
                    <?php
                        if(session_status() === PHP_SESSION_NONE) session_start();
                        if (isset($_SESSION["user"])) {
                            echo "Выйти";
                        } else {
                            echo "Вход/Регистрация";
                        }
                        ?>
                </a>
            </li>
        </ul>
    </div>
</nav>