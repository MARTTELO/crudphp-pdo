<?php
    $host = 'localhjost';
    $dbname = 'crud_php_pdo';
    $username = 'root';
    $password = '';

    try {
     $pdo = new PDO("mysql:host=$host:dbname=$dbname",username: $username,password: $password);
    } catch (PDOException $e) {
      die("Erro ao conectar ao banco de dados: ". $e->getMessage());

    };

    