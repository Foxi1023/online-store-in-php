<?php 
include_once("Template/header.php") ?>
<link rel="stylesheet" href="../View/css/styleRe.css">

<body>
    <form action="../Model/checkRegistration.php" method="post">
        <h2>Регистрация</h2>
        <label for="login">Введите email: </label>
        <input type="text" name="login" value="" required>
        <label for="password">Введите пароль: </label>
        <input type="text" name="password" value="" required>
        <input type="submit" value="Зарегистрироваться">
        <p><a href="../View/loginForm.php">есть аккаунт?</a></p>
    </form>
</body>

</html>