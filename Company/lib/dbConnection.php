<?php
//Подключение к БД
$driver = 'mysql';
$host = 'localhost';
$db_name = 'company';
$db_login = 'root';
$db_password = '';
$charset = 'utf8';
   //Режим сообщений об ошибках.  //Выбрасывать исключения.
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
try {
    $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $db_login, $db_password, $options);
} catch (PDOException $e) { //Представляет ошибку
    die( $e->getMessage());
}


