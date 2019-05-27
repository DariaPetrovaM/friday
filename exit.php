<?php
          session_start();
          
          
unset($_SESSION['password']);
            unset($_SESSION['email']); 
            unset($_SESSION['id']);//    уничтожаем переменные в сессиях
            unset($_SESSION['name_user']);
        exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=main.php'></head></html>");
            // отправляем пользователя на главную страницу.
            ?>