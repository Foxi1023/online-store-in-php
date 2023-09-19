<?
if(session_status() === PHP_SESSION_NONE) session_start();

session_unset();
unset($_SESSION["user"]);
$_SESSION["user"] = null;

header('Location: ../View/index.php');
?>