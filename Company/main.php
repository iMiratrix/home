<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
</head>
<body>
<span class="seconds">20</span>
<?php
require_once 'lib/call.php'; //Подключение к файлу
$id = $data['id'];
while ($data = $stmt->fetch()) { // Извлечение  строк из результирующего набора
    echo "<table>                            <!--Таблица-->
<tr>
  <th>Название компании: <a href='lib/del.php'></th>
  <th>Дата создания:</th>
  <th>Адрес:</th>
  <th>Номер:</th>
  <th>Ссылка:</th>
  <th>О компании:</th>
  <th>Лого:</th>
  <th>Ф.И.О:</th>
  </tr>
 <tr>
  <td>" . $data['name'] . "  <a href='reformatform.php'><button>Изменить</button></a><button>Удалить</button></a></th></td> 
  <td>" . $data['date'] . "</td>
  <td>" . $data['address'] . "</td>
  <td>" . $data['number'] . "</td>
  <td><a href='" . $data['url'] . "'>Ссылка</a></td>
  <td>" . $data['info'] . "</td>
  <td><img src='" . $data['img'] . "' alt=''width='100px'height='100px'/> </td >
  <td>" . $data['fio'] . " </td >
 </tr>
</table > ";
}
?>
<br>
<a href="addform.php">Добавить запись</a>
</body>

</html>

