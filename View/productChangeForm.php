<?php include_once("Template/header.php");

if(session_status() === PHP_SESSION_NONE) session_start();

if (!$_SESSION["user"]) {
    header('Location: ../View/index.php');
}

?>

<link rel="stylesheet" href="../View/css/styleRe.css">

<body>
    <form action="../Model/productСhange.php" method="post" enctype="multipart/form-data">
        <h2>Редактирование товара</h2>
        <label for="id">Введите id товара: </label>
        <input type="number" name="id" value="1">
        <label for="name">Введите название: </label>
        <input type="text" name="name" value="">
        <label for="description">Введите описание: </label>
        <input type="text" name="description" value="">
        <label for="price">Введите стоимость: </label>
        <input type="number" name="price" value="">
        <label for="count">Введите кол-во: </label>
        <input type="number" name="count" value="">
        <label for="uploadfile">Вставте изображение товара: </label>
        <input type="file" name="uploadfile">
        <input type="submit" value="Обновить">
    </form>
</body>

</html>