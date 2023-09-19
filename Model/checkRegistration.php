<?

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login']) && isset($_POST['password'])) {
    
    if(session_status() === PHP_SESSION_NONE) session_start();

/*     echo $_POST['login'];
    echo $_POST['password']; */

    $login = $_POST['login'];
    $_SESSION["user"] = $login;
    }
}

header('Location: ../View/index.php');
?>