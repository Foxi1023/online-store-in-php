<?php 
include_once("Template/header.php") ?>
<link rel="stylesheet" href="../View/css/styleRe.css">

<body>
    <form action="../Model/checkLogin.php" method="post">
        <h2>Вход</h2>
        <label for="login">Введите email: </label>
        <input type="email" name="login" value="">
        <label for="password">Введите пароль: </label>
        <input type="text" name="password" value="">
        <input type="submit" value="Войти">
        <p><a href="../View/registrationForm.php">нет аккаунта?</a></p>
        <p><?php 
            if(session_status() === PHP_SESSION_NONE) session_start();
            echo $_SESSION["error"];
            unset($_SESSION["error"]);
        ?></p>
    </form>
</body>

</html>