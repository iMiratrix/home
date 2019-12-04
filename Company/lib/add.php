<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отправка</title>
</head>
<body>
<?php
require_once __DIR__ . '/dbConnection.php';//Подключение к файлу
$name = trim($_POST['name']);
$date = trim($_POST['date']);
$address = trim($_POST['address']);
$number = trim($_POST['number']);   //Присваеваем переменным значения из суперглобального массива
$url = trim($_POST['url']);
$info = trim($_POST['info']);
$img = ($_POST['img']);
$fio = trim($_POST['fio']);
if (!empty($name)) {
    //Добавление записей в таблицу
    $sql = 'INSERT INTO company(name,date,address,number,url,info,img,fio) VALUES(:name,:date,:address,:number,:url,:info,:img,:fio)';
    //Массив данных
    $params = ['name' => $name, 'date' => $date, 'address' => $address, 'number' => $number, 'url' => $url, 'info' => $info, 'img' => $img, 'fio' => $fio];
    $stmt = $pdo->prepare($sql); //Подготавливает запрос к выполнению и возвращает связанный с этим запросом объект
    $stmt->execute($params); //Запускает подготовленный запрос
    echo "Запись добавлена";
} else {
    echo "Некоторые поля пустые";

}
?>
<br>
<a href="http://company/main.php"> Посмотреть</a>
</body>
</html>
