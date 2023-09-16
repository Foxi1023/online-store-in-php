<?php include_once("Template/header.php") ?>
<link rel="stylesheet" href="../View/css/styleRe.css">

<body>
    <form action="../View/removeProduct.php" method="post">
        <h2>удалить товар</h2>
        <label for="id">Введите id товара: </label>
        <input type="number" name="id" value="1">
        <input type="submit" value="Удалить">
    </form>
</body>

</html>