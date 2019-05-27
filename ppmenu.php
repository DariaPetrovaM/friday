<?php include 'includ/head.php';?> 
<link rel="stylesheet" href="css/ppmenu.css">
<body data-spy="scroll" data-target="#navbarResponsive">
<?php include 'includ/connect.php';?> 

<?php include 'includ/navigation.php'; ?>

<div class="coffe">
    <div class="caption text-center">
      <h1>ПП Меню</h1>
      <div class="heading-underline"></div>
      <div class="row">
    <div class="col-lg-6">
<div class="dishes">
    
<?php
  $sql=mysqli_query($link,'SELECT `id_bluda`,`id_cat`,`name`,`opis`,`cost`,`ves` FROM `bluda`WHERE `id_cat`=8');
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
    <div class="item item-4"></div>

</div>
</div>
</div>

<?php include 'includ/foter.php'; ?>
