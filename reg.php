<?php include 'includ/head.php';?> 
 <link rel="stylesheet" href="css/main.css">
<body data-spy="scroll" data-target="#navbarResponsive">

<div id="loginbc" class="loginbc">
<?php include 'includ/navigation.php'; 


?>
<!-- попробуй через табл-->

  	<div class="col-12">

		<h2 class="headin">регистрация</h2>
		<div class="heading-underline"></div>
		
	</div>
	<div>
		
		
		</div>
	<div class="row text-center justify-content-center">
		<div class="col-md-4">
	<div class="log">
		
		
  	<form action ="save_user.php" method="post" >
  		<div class="form-group">
  		<label >Name</label>
  		<input name="name_user" type="text"  id="name_user" class="form-control" size="15" maxlength="15">

  		</div>
  		<div class="form-group">
  		<label >Email</label>
  		<input name="email" type="email" id="email" class="form-control" maxlength="155" >

  		</div>
  			<div class="form-group">
  		<label>Password</label>
  		<input name="password" type="password"  id="password" class="form-control" size="7" maxlength="7">
  			
  		</div>
  		<div class="form-group">
  			<input type="submit" name="submit" value="регистрация" class="btn4 btn-primary">
  		</div>
  	</form>
 
</div>
</div>
   
</div>
</div>

<?php include 'includ/foter.php'; ?>