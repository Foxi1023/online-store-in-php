<?php


class ProductModel {
    private $user = 'root';
    private $password = 'root';
    private $db = 'maker';
    private $host = 'localhost';
    private $port = 3306;
    private $link;
    
    // Подключение к db
    public function __construct() {
        $this->link = new mysqli($this->host, $this->user, $this->password, $this->db, $this->port);
        //проверка на подключения
        if ($this->link->connect_error) {
            die("Connection failed: " . $this->link->connect_error);
        }
    }

    // Получение всех товаров 
    public function getAllProducts() {
        $query = 'SELECT * FROM products';
        $res = $this->link->query($query);
        return $res;
    }

    // Изменение товара
    public function UpdateProduct($id, $name, $price, $description, $count) {
        // Подготовка SQL-запроса с использованием подстановочных параметров
        $query = "UPDATE `products` 
            SET 
                `name` = ?,
                `price` = ?,
                `description` = ?,
                `rating` = ?,
                `count` = ?
            WHERE 
                `id` = ?";
        $stmt = $this->link->prepare($query);
        $rating = 0;
        $stmt->bind_param('sdssdi', $name, $price, $description, $rating, $count, $id);
        $stmt->execute();
    }
    // Получение товара по id
    public function getProductById($id) {
        // Подготовка SQL-запроса с использованием подстановочных параметров
        $query = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->link->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $res = $stmt->get_result();
        return $res;
    }

    // Добавление товара
    public function addProduct($name, $price, $description, $count) {
        // Подготовка SQL-запроса с использованием подстановочных параметров
        $query = "INSERT INTO `products`(`name`, `price`, `description`, `rating`, `count`) VALUES (?, ?, ?, '0', ?);";
        $stmt = $this->link->prepare($query);
        $stmt->bind_param('sdsd', $name, $price, $description, $count);
        $stmt->execute();
    }

    // Удаление товара
    public function removeProduct($id) {
        // Подготовка SQL-запроса с использованием подстановочных параметров
        $query = "DELETE FROM products WHERE id = ?";
        $stmt = $this->link->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
    }

    public function getProductsById($ids) {
        // Генерирование строку с запятыми для использования в операторе IN
        $placeholders = implode(',', array_fill(0, count($ids), '?'));
        
        // Подготовка SQL-запроса с использованием подстановочных параметров
        $query = "SELECT * FROM products WHERE id IN ($placeholders)";

        $stmt = $this->link->prepare($query);
    
        // Привязывание значения параметров id к знакам вопроса в запросе
        $stmt->bind_param(str_repeat('i', count($ids)), ...$ids);
        
        $stmt->execute();
        $res = $stmt->get_result();
        return $res;
    }
}

?>