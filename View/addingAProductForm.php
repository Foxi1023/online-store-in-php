<?php include_once("Template/header.php") ?>

<link rel="stylesheet" href="../View/css/styleRe.css">

<body>
    <form action="../Model/addingAProduct.php" method="post">
        <h2>Создание товара</h2>
        <label for="name">Введите название: </label>
        <input type="text" name="name" value="">
        <label for="description">Введите описание: </label>
        <input type="text" name="description" value="">
        <label for="price">Введите стоимость: </label>
        <input type="number" name="price" value="">
        <label for="count">Введите кол-во: </label>
        <input type="number" name="count" value="">
        <label for="img">Вставте изображение товара: </label>
        <input type="file" name="img" id="1">
        <input type="submit" value="Создать">
    </form>
</body>

</html>