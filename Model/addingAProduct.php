<?php
require_once "../Controller/ProductController.php";
require_once "../Model/ProductModel.php";
require_once "../View/ProductView.php";

$model = new ProductModel();
$view = new ProductView(); 
$controller = new ProductController($model, $view);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //создаем путь
    $file4 = "../img/count.txt";
    
    //получаем значение
    if (file_exists($file4)) {
        $pathImg = (int)file_get_contents($file4);
    } else {
        $pathImg = 0;
    }
    //прибавляем значение на +1
    $pathImg++;
    
    file_put_contents($file4,$pathImg);
    
    preg_match('/(.+)?\.(.+)?$/', $_FILES['uploadfile']['name'], $output); 
    $mime = $output[2];
    
    //получаем картинку
    $uploadedFile = $_FILES['uploadfile']['tmp_name'];
    
    //путь картинки и ее новое название
    $path = "../img/$pathImg.png";
    
    //проверка на расширение изображения
    if ($mime == "png") {
        echo "Правильное расширение изображения";
        echo "<br>";
    } else {
        echo "Неправильное расширение изображения";
        echo "<br>";
        exit();
    }
    
    if(file_exists($uploadedFile)) {
       echo "файл загружен во временную директорию";
       echo "<br>";
    } else {
       echo "Загрузка файла не удалась";
       echo "<br>";
       exit();
    }
    
    if(move_uploaded_file($uploadedFile, $path)) {
       echo "Загрузка завершена";
       echo "<br>";
    } else {
       echo "move_uploaded_file не удалось";
       echo "<br>";
       exit();
    }
    
    // Получение данных из формы
    $name = $_POST["name"];
    $description = $_POST["description"];
    $img = $_POST["img"];
    $price = $_POST["price"];
    $count = $_POST["count"];
    
    //добавляем продукт
    $controller->addProduct($name, $price, $description, $count, $pathImg);
    
}

//возвращяю пользователя на гл.страницу
header('Location: ../View/index.php');

?>