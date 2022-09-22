<?php
//print_r($_POST);
$email = $_POST['email']; //из массива пост по ключу емайл определенное значение
$message = $_POST['message']; //данные записываются в переменные

$error = '';
if(trim($email)=='') //удаляет пробелы функция
$error = 'Введите ваш email';
  else if(trim($message)=='')
    error if(strlen($message)<10)
    $error='Сообщение должно быть более 10 символов';

    if($error !=''){
      echo $error;
      exit;
  }
