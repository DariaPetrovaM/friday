
<?php
session_start(); // Right at the top of your script
?>

 
<!DOCTYPE html>
<html lang="ru">  
<head> 
	<title>FRIDAY</title>  
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href=" css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&amp;subset=cyrillic" rel="stylesheet">
    
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/fixed.css">
     

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
  <body date-spy="scroll" data-target="#navbarResponsive">
  	<!--- start home section-->
<div id="home">
 
	<!--- start nav-->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
   <a class="navbar-brand" href="#"><img src="img/logo2.png" alt="logo"></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
   	<span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarResponsive">
   	<ul class="navbar-nav ml-auto">
   		<li class="nav-item"><a class="nav-link" href="#home">home</a></li>
   		<li class="nav-item"><a class="nav-link" href="#aboutus">about us</a></li>
   		<li class="nav-item"><a class="nav-link" href="#menu">menu</a></li>
   		<li class="nav-item"><a class="nav-link" href="#contact">contact</a></li>
      <?php if (!isset($_SESSION['email'])) { ?>
   		<li class="nav-item"><a class="nav-link" href="index.php">Войти</a></li>
       
      <?php } else {  if($_SESSION['email']=='dasha.petrovam@gmail.com') {?>
      <li class="nav-item"><a class="nav-link" href="admin/admin.php" > <?=$_SESSION['name_user']; ?></a></li> 
      <?php } else{  ?>   <li class="nav-item"><a class="nav-link" > <?=$_SESSION['name_user']; ?></a></li>   <?php } ?>
      <li class="nav-item"><a class="nav-link" href="exit.php" >Выйти <?php } ?></a></li>
          

   	</ul>
   </div>	
  </nav> 
    <!--- end nav-->
  <div class="landing">
  	<div class="home-wrap">
  		<div class="home-inner">
  			
  		</div>
  		
  	</div>
  </div>
  <div class="caption text-center">
  	<h1>Welcome<br>to<br>friday</h1>
  	
  </div>


</div>

  	<!--- end home section-->

 




  	<!--- start about us section-->
<div id="aboutus" class="offset">
	<div class="narrow">
	<div class="col-12">

		<h3 class="heading">about us</h3>
		<div class="heading-underline"></div>
	</div>
	<div class="row text-center ">
		<div class="col-lg-4">
			<div class="about">
				<h4> интерьер</h4>
      						<p>  "FRIDAY" — это несколько месяцев плодотворной работы поваров, дизайнеров, архитекторов и строителей, барменов и фотографов. Небольшое уютное кафе с практически домашней атмосферой.  На стенах  располагаются декоративные панно из дерева разных сортов. Деревянная мебель с элементами старины и другие детали интерьера выполнены на заказ профессиональными мастерами. Гармоничное сочетание цветов и материалов дает ощущение уюта и делает пребывание в нашем кафе невероятно комфортным.</p>
			</div>
		</div>
			<div class="col-lg-4">
				<div class="inter">
      						<img src="img/inter1.jpg" class="img-fluid" alt="">
      					</div>
			</div>
			<div class="col-lg-4">
			<div class="inter">
      						<img src="img/inter2.jpg" class="img-fluid" alt="">
      		</div>
			</div>

		
	</div><!---end row-->
    <div class="row text-center">
		<div class="col-lg-4">
				<div class="cookk">
      						<img src="img/cook.jpg" class="img-fluid" alt="">
      					</div>
			</div>
		<div class="col-lg-8">
			<div class="about">
				<h4> кухня</h4>
      						<p>  Мы заботимся о вкусовых качествах наших блюд и выбираем только качественные и свежие продукты для их приготовления. В меню вы встретите огромный выбор салатов, супов, горячих и холодных закусок и десертов.Еще одна наша гордость — бургеры. Котлеты для них мы готовим только из премиальной мраморной говядины, а все соусы производятся нашими поварами вручную.  Мы заботимся о каждом нашем посетителе, поэтому постарались учесть вкусовые предпочтения каждого.sВыбор напитков в меню также весьма внушительный. Винную карту для нас составлял профессиональный сомелье, поэтому в ней только самые качественные вина со всего мира с подробным описанием каждого из них.</p>
			</div>
		</div>
		
		</div><!---end row-->

</div><!---end narrow-->

	
</div>



    <!--- end about us section-->





    <!--- start menu section-->
<div id="menu" class="offset">
	 
<div class="fixed-background"> 
	
<div class="row dark ">
	<div class="narrow">
	<div class="col-12">

		<h3 class="heading">menu</h3>
		<div class="heading-underline"></div>
		<h4 >Наши повара долго доводили до совершенства блюда, которые в итоге вошли в меню.</h4>	

	</div>
	<div class="row">
		<div class="col-md-3">
      		<a class="btn btn-outline-light btn-lg" href="menu.php">Меню</a>
      	</div>
      	<div class="col-md-3"><a class="btn btn-outline-light btn-lg" href="ppmenu.php"> ПП Меню</a></div>
      	<div class="col-md-3"><a class="btn btn-outline-light btn-lg" href="drink.php">Напитки</a></div>
      	<div class="col-md-3"><a class="btn btn-outline-light btn-lg" href="breakfast.php">Завтраки</a></div>
      </div>
</div>

      </div>  <!---end  row dark-->
      	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/8.jpg" alt="Первый слайд">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/9.jpg" alt="Второй слайд">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/7.jpg" alt="Третий слайд">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/10.jpg" alt="Третий слайд">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




  	<div class="fixed-wrap">
  		<div class="fixed">
  			
  		</div>
  	</div>
  
</div><!--- end fixed-background -->

</div>
    <!--- end menu section-->




    <!--- start contact section-->
<div id="contact">
<footer>
	<div class="col-12">

		<h3 class="heading">contact</h3>
		<div class="heading-underline"></div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-5 text-center">
			<p>+38(093)7528577 <br>
+38(050)7528577<br> Наш адрес:<br>
пр.Победы,д.66</p>
     <a href="" target="_blank"><i class="fab fa-facebook"></i></a>
     <a href="" target="_blank"><i class="fab fa-twitter"></i></a>
     <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
		</div>
		
	</div>
</footer>
</div>
    <!--- end contact section-->


  		<script src="js/bootstrap.min.js"></script>
  </body>
  </html>