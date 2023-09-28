<?php
require_once "../Model/UserModel.php";

$model = new UserModel();

if(session_status() === PHP_SESSION_NONE) session_start();

if (!$_SERVER["REQUEST_METHOD"] == "POST") {
    header('Location: ../View/loginForm.php');
    exit();
}

if (strlen($_POST['login']) < 3 && strlen($_POST['password']) < 3) {
    header('Location: ../View\loginForm.php');
    $_SESSION["error"] = "Не введен логин или пароль";
    exit();
}

$res = $model->getUser($_POST['login'], $_POST['password']);
if ($res === false) {
    header('Location: ../View\loginForm.php');
    $_SESSION["error"] = "Данный пользователь не найден";
    exit();
}


var_dump($_POST['login']);
var_dump($_POST['password']);


$_SESSION["user"] = $_POST['login'];


header('Location: ../View/index.php');
?>