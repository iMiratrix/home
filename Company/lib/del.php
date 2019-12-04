<?php
require_once __DIR__ . '/dbConnection.php'; //Подключение к файлу
require_once 'call.php'; //Подключение к файлу
$data = $stmt->fetch();// Извлечение следующей строки из результирующего набора
$id = $data['id'];

$data = $pdo->prepare('DELETE FROM company WHERE id = :id'); //Удаляем записи из таблицы
$data->bindParam(':id', $id);//Связывает переменную с параметром подготавливаемого SQL-запроса
$data->execute(); //Запускает подготовленный запрос
echo "Удалена запись №.$id.<br> <a href='http://company/main.php'>Проверить</a>";
