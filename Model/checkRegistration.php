<?
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $_POST['login'];
    echo $_POST['password'];
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $login = $_POST['login'];
        $_SESSION["user"] = $login;
        header('Location: ../View/index.php');
    }
}
?>