<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Изменить</title>
</head>
<body>
<div class="reg">
    <form action="lib/reformat.php" method="post">
        <input type="text" name="name" placeholder="Название" class="form-control">
        <input type="date" name="date" placeholder="Дата" class="form-control">
        <input type="text" name="address" placeholder="Адрес" class="form-control">
        <input type="text" name="number" placeholder="Номер" class="form-control">
        <input type="url" name="url" placeholder="url" class="form-control">
        <input type="text" name="info" placeholder="О компании" class="form-control">
        <input type="file" name="img" placeholder="Лого" class="form-control">
        <input type="text" name="fio" placeholder="Ф.И.О" class="form-control">
        <button type="submit" name="btn" class="btn btn-lg btn-primary btn-block">Отправить</button>
        <a href="main.php">Компании</a>
    </form>
</div>
</body>
</html>
<?php

