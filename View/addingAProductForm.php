<?php include_once("Template/header.php");

if(session_status() === PHP_SESSION_NONE) session_start();

if (!$_SESSION["user"]) {
    header('Location: ../View/index.php');
}

?>

<link rel="stylesheet" href="../View/css/styleRe.css">

<body>
    <form action="../Model/addingAProduct.php" method="post" enctype="multipart/form-data">
        <h2>Создание товара</h2>
        <label for="name">Введите название: </label>
        <input type="text" name="name" value="" required>
        <label for="description">Введите описание: </label>
        <input type="text" name="description" value="" required>
        <label for="price">Введите стоимость: </label>
        <input type="number" name="price" value="" required>
        <label for="count">Введите кол-во: </label>
        <input type="number" name="count" value="" required>
        <label for="img">Вставте изображение товара: </label>
        <input type="file" name="uploadfile" id="img" required>
        <input type="submit" value="Создать">
    </form>
</body>

</html>