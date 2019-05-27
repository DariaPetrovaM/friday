<?php include 'includ/head.php';?> 
 <link rel="stylesheet" href="css/drink.css">
<body data-spy="scroll" data-target="#navbarResponsive">
<?php include 'includ/connect.php';?> 

<?php include 'includ/navigation.php'; ?>
  

    <div class="caption text-center">
      <h1>Напитки</h1>
      <div class="heading-underline"></div></div>
      <div class="row">
    <div class="col-md-6">
      <div class="dishes">
    
<?php
  $sql=mysqli_query($link,'SELECT `id_bluda`,`id_cat`,`name`,`opis`,`cost`,`ves` FROM `bluda`WHERE `id_cat`=9');
  while($dish=mysqli_fetch_array($sql)):?>
    <h2><?php echo "{$dish['name']}";?></h2>
    <p class="opis"><?php echo "{$dish['opis']}";?></p>
    <p class="ves"><?php echo"{$dish['ves']}";?>грамм</p>
    <p class="cost"><?php echo"{$dish['cost']}";?>грн</p>
  


   


<?php endwhile; ?>
</div>
</div>
<div class="col-md-6">
  <div class="slid">
  <div class="item item-1"></div>
  <div class="item item-2"></div>
  <div class="item item-3"></div>
    <div class="item item-13"></div>
<div class="item item-14"></div>
<div class="item item-15"></div>
<div class="item item-16"></div>
</div>
</div>
</div>


  
<span><h3>Безалкогольные напитки</h3></span>
<div class="row">
  
<div class="col-md-6">
  <div class="dishes">
<?php
  $sql=mysqli_query($link,'SELECT `id_bluda`,`id_cat`,`name`,`opis`,`cost`,`ves` FROM `bluda`WHERE `id_cat`=10');
  while($dish=mysqli_fetch_array($sql)):?>
    <h2><?php echo "{$dish['name']}";?></h2>
    <p class="opis"><?php echo "{$dish['opis']}";?></p>
    <p class="ves"><?php echo"{$dish['ves']}";?>грамм</p>
    <p class="cost"><?php echo"{$dish['cost']}";?>грн</p>

    <?php endwhile; ?>
  </div>
</div>
<div class="col-md-6">
    <div class="slid">
  <div class="item item-5"></div>
  <div class="item item-6"></div>
  <div class="item item-7"></div>
    <div class="item item-8"></div></div>
  </div>
</div>
<span><h3>Алкогольные напитки</h3></span>
<div class="row">
  
<div class="col-md-6">
  <div class="dishes">
<?php
  $sql=mysqli_query($link,'SELECT `id_bluda`,`id_cat`,`name`,`opis`,`cost`,`ves` FROM `bluda`WHERE `id_cat`=11');
  while($dish=mysqli_fetch_array($sql)):?>
    <h2> <?php echo "{$dish['name']}";?></h2>
    <p class="opis"><?php echo "{$dish['opis']}";?></p>
    <p class="ves"><?php echo"{$dish['ves']}";?>грамм</p>
    <p class="cost"><?php echo"{$dish['cost']}";?>грн</p>
    
    <?php endwhile; ?>
</div>
</div>
<div class="col-md-6">
    <div class="slid">
  <div class="item item-9"></div>
  <div class="item item-10"></div>
  <div class="item item-11"></div>
    <div class="item item-12"></div>
    <div class="item item-17"></div>
  <div class="item item-18"></div>
    <div class="item item-19"></div></div>
  </div>
</div>
<?php include 'includ/foter.php'; ?>
