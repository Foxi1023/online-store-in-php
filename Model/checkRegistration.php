<?php
require_once "../Model/UserModel.php";

$model = new UserModel();

if(session_status() === PHP_SESSION_NONE) session_start();

if (!$_SERVER["REQUEST_METHOD"] == "POST") {
    header('Location: ../View/registrationForm.php');
    exit();
}

if (strlen($_POST['login']) < 5) {
    header('Location: ../View/registrationForm.php');
    $_SESSION["error"] = "меньше 5 символов логин";
    exit();
}

if (strlen($_POST['login']) < 5 && strlen($_POST['password']) < 8) {
    header('Location: ../View/registrationForm.php');
    $_SESSION["error"] = "Меньше 8 символов пароль";
    exit();
}


var_dump($_POST['login']);
echo "<br>";
var_dump($_POST['password']);
echo "<br>";


$res = $model->addUser($_POST['login'], $_POST['password']);
if (!$res) {
    header('Location: ../View/registrationForm.php');
    $_SESSION["error"] = "";
    exit();
}

$_SESSION["user"] = $_POST['login'];

var_dump($res);
echo "<br>";
var_dump($_SESSION["user"]);
echo "<br>";
var_dump($_SESSION["user"]);


header('Location: ../View/index.php');
?>