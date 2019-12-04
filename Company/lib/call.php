<?php
require_once __DIR__ . '/dbConnection.php'; //Подключение к файлу
$stmt = $pdo->query('SELECT * FROM company'); //SQL запрос

