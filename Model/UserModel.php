<?php
include "../Model/MysqlConn.php";

class UserModel extends Mysql {
    // Подключение к db
    public function __construct() {
        $this->link = new mysqli($this->host, $this->user, $this->password, $this->db, $this->port);
        //проверка на подключения
        if ($this->link->connect_error) {
            die("Connection failed: " . $this->link->connect_error);
        }
    }
    
    // Добавление
    public function addUser($email, $password) {
        // Подготовка SQL-запроса с использованием подстановочных параметров
        $query = "INSERT INTO `users`(`email`, `password`) VALUES (?, ?)";
        $stmt = $this->link->prepare($query);
        $stmt->bind_param('ss', $email, $password);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Получение товара по id
public function getUser($email, $password) {
    // Подготовка SQL-запроса с использованием подстановочных параметров
    $query = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $this->link->prepare($query);
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();

    $res = $stmt->get_result();

    if ($res->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}
}

?>