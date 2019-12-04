<?php
require_once __DIR__ . '/dbConnection.php'; //Подключение к файлу
require_once 'call.php'; //Подключение к файлу

$id = $data['id'];
$data = $pdo->prepare('DELETE FROM company WHERE id = :id'); //Удаляем записи из таблицы
$data->bindParam(':id', $id); //Связывает переменную с параметром подготавливаемого SQL-запроса
$data->execute(); //Запускает подготовленный запрос


$date = trim($_POST['date']);
$address = trim($_POST['address']);
$number = trim($_POST['number']);
$url = trim($_POST['url']);
$info = trim($_POST['info']);
$img = ($_POST['img']);
$fio = trim($_POST['fio']);
if (!empty($name)) {
    $sql = 'INSERT INTO company(name,date,address,number,url,info,img,fio) VALUES(:name,:date,:address,:number,:url,:info,:img,:fio)';
    $params = ['name' => $name, 'date' => $date, 'address' => $address, 'number' => $number, 'url' => $url, 'info' => $info, 'img' => $img, 'fio' => $fio];
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    echo "Запись изменена<br><a href='http://company/main.php'>Проверить</a>";
} else {
    echo "Некоторые поля пустые";

}
//    $id = $data['id'];
//    $sql = 'UPDATE company SET name =:name, date=:date, address=:address, number =:number, url=:url, info=:info, img=:img, fio=:fio WHERE id = :id';
//    $stmt = $pdo->prepare($sql);
//    $params = $stmt->execute(array(':name' => $name, ':date' => $date, ':address' => $address, ':number' => $number, ':url' => $url, ':info' => $info, ':img' => $img, ':fio' => $fio, 'id' => $id));
//    $stmt->execute();




