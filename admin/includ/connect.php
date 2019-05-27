<?php

  $host = 'localhost';  // Хост, у нас все локально
  $user = 'admin';    // Имя созданного вами пользователя
  $pass = '1234'; // Установленный вами пароль пользователю
  $db_name = 'fridaybase';   // Имя базы данных
  $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
mysqli_set_charset($link, 'utf8');

  // Ругаемся, если соединение установить не удалось
  if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
?>