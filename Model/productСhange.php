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
    echo $mime;
    echo "<br>";
    
    //получаем картинку
    $uploadedFile = $_FILES['uploadfile']['tmp_name'];
    
    //путь картинки и ее новое название
    $path = "../img/$pathImg.png";
    
    //проверки
    if ($mime != "png") {
        echo "incorrect image extension";
        echo "<br>";
        exit();
    }
    if(file_exists($uploadedFile))
    {
       echo "file uploaded to temp dir";
       echo "<br>";
    }
    else
    {
       echo "file upload failed";
       echo "<br>";
       exit();
    }
    
    if(move_uploaded_file($uploadedFile, $path))
    {
       echo "upload complete";
       echo "<br>";
    }
    else
    {
       echo "move_uploaded_file failed";
       echo "<br>";
       exit();
    }
    
/*     //тестирую введенные данные
    echo $_FILES['uploadfile']['name'];
    echo "<br>";
    echo $_FILES['uploadfile']['tmp_name'];
    echo "<br>";
    echo "name ".$_POST["name"];
    echo "<br>";
    echo "description ".$_POST["description"];
    echo "<br>";
    echo "price ".$_POST["price"];
    echo "<br>";
    echo "count ".$_POST["count"];
    echo "<br>";
    echo "count = ".$count;
    echo "<br>"; */
    
    
    
    // Получение данных из формы
    $name = $_POST["name"];
    $id = $_POST["id"];
    $description = $_POST["description"];
    $img = $_POST["img"];
    $price = $_POST["price"];
    $count = $_POST["count"];
    
    //добавляем продукт
    $controller->UpdateProduct($id, $name, $price, $description, $count, $pathImg);
}

//возвращяю пользователя на гл.страницу
header('Location: ../View/index.php');

?>