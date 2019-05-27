<?php
    if (isset($_POST['name_user'])) { $name_user = $_POST['name_user']; if ($name_user == '') { unset($name_user);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }

    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 if ((empty($name_user)) || (empty($email)) || (empty($password)) ) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $name_user = stripslashes($name_user);
    $name_user = htmlspecialchars($name_user);
    
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
 $password = stripslashes($password);
    $password = htmlspecialchars($password);
 //удаляем лишние пробелы
    $name_user = trim($name_user);
    $email = trim($email);
    $password = trim($password);
 // подключаемся к базе
    include 'includ/connect.php';// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $result = mysqli_query($link,"SELECT id_user FROM users WHERE email='$email'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id_user'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
 // если такого нет, то сохраняем данные
    $result2 = mysqli_query ($link,"INSERT INTO users (name_user,password,email) VALUES('$name_user','$password','$email')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='main.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>