<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8"> //кодировка
<meta name ="viewport" content="width=device-width, initial-scale=1.0"> //делает сайт адаптивным
<meta http-equiv="X-UA-Compatible" content="ie=edge"> //адаптивный к браузеру edge
<link rel="stylesheet" href="/css/style.css"> //подключили стили
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">// подключаем стили с сайта bootstrapcdn
<title>Контактная форма</title> //тег заголовка
</head>
<body>
<?php require "blocks/header.php" ?> //подключаем файл
<div class="container mt-5">
  <h3>Контактная форма</h3>
  <form  action="check.php" method="post"> //данные отправятся на страничку check.php
    <input type="email" name="email" placeholder="Введите Email"
    class="form-control"><br>
    <textarea name="message" class="form-control"
    placeholder="Введите ваше сообщение"></textarea><br>
    <button type="submit" name="send" class="btn btn-success">Отправить</button>//страница перезагрузится
  </form>
</div>
<?php require "blocks/footer.php" ?>



</body>
</html>
