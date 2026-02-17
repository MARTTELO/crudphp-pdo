<?php
$host = 'localhost';
$dbname = 'crud_php_pdo';
$username = 'root';
$password = '';

try {
  $conn = new PDO('mysql:host=localhost;dbname=crud_php_pdo', username: $username, password: $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   die("Erro ao conectar ao banco de dados: " . $e->getMessage());

}

