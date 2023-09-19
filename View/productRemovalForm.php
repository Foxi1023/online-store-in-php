<?php 
include_once("Template/header.php");

if(session_status() === PHP_SESSION_NONE) session_start();

if (!$_SESSION["user"]) {
    header('Location: ../View/index.php');
}

?>
<link rel="stylesheet" href="../View/css/styleRe.css">

<body>
    <form action="../Model/productRemoval.php" method="post">
        <h2>удалить товар</h2>
        <label for="id">Введите id товара: </label>
        <input type="number" name="id" value="1">
        <input type="submit" value="Удалить">
    </form>
</body>

</html>