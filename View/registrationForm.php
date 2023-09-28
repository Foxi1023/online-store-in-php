<?php 
include_once("Template/header.php"); ?>
<link rel="stylesheet" href="../View/css/styleRe.css">

<body>
    <form action="../Model/checkRegistration.php" method="post">
        <h2>Регистрация</h2>
        <label for="login">Введите email: </label>
        <input type="email" name="login" value="">
        <label for="password">Введите пароль: </label>
        <input type="text" name="password" value="">
        <input type="submit" value="Зарегистрироваться">
        <p><a href="../View/loginForm.php">есть аккаунт?</a></p>
        <p><?php 
            if(session_status() === PHP_SESSION_NONE) session_start();
            echo $_SESSION["error"];
            unset($_SESSION["error"]);
        ?></p>

    </form>
</body>

</html>