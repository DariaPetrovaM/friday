<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    
    ?>
 
    <?php include 'includ/head.php';
  ?>   
 <link rel="stylesheet" href="css/main.css">
<body data-spy="scroll" data-target="#navbarResponsive">
    <div id="loginbc" class="loginbc">
<?php include 'includ/navigation.php'; 


?>


 
    <div class="col-12">

        <h2 class="headin">Login</h2>
        <div class="heading-underline"></div>
        
    </div>
    <div>
        
        
        </div>
    <div class="row text-center justify-content-center">
        <div class="col-md-4">
    <div class="log">
        
        
     <form action="testreg.php" method="post">
     
        <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" >

        </div>
            <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" >
            
        </div>
        <div class="form-group">
            <input type="submit" value="Войти"  class="btn4 btn-primary">
            
        </div>
        <a href="reg.php">Зарегистрироваться</a> 
    </form>
 <?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (!empty($_SESSION['email']) or !empty($_SESSION['id']))
    {
    

    // Если не пусты, то мы выводим ссылку
    echo "Вы вошли на сайт, как ".$_SESSION['email'];
    }
    ?>
    
</div>
</div>
   
</div>
</div>


    
    <?php include 'includ/foter.php'; ?>
  
