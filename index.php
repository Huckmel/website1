<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8"> //кодировка
<meta name ="viewport" content="width=device-width, initial-scale=1.0"> //делает сайт адаптивным
<meta http-equiv="X-UA-Compatible" content="ie=edge"> //адаптивный к браузеру edge
<link rel="stylesheet" href="/css/style.css"> //подключили стили
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">// подключаем стили с сайта bootstrapcdn
<title>PHP веб сайт</title> //тег заголовка
</head>
<body>


      <div class="container mt-5"> //выведем заголовок(все идет от bootstrapcdn)
        <h3 class="mb-5">Наши статьи</h3>

        <div class="d-flex flex-wrap"> //перенос на новый ряд, если не помещаются блоки
        <?php
          for($i=0;$i<5;$i++): //открываем цикл
              ?>
          <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Просто текст</h4>
          </div>
          <div classes="card-body">
          <img src="img/<?php echo ($i+1) ?>.jpg" class="img-thumbnail">//отображение изображений/. числа от 1 до 5

              <ul class="list-unstyled mt-3 mb-4">
                <li>10 users includded</li>
                <li>2 GB of storage</li>
                <li>Email support</li>
                <li>Help center access</li>
                </ul>
                <button type="button" class="btn-lg btn-block btn- outline-primary">Подробнее</button>
                </div>
                </div>
              <?php endfor; ?> //закрываем цикл
            </div>
          </div>
        <?php require "blocks/footer.php" ?>  //подключение блока
</body>
</html>
