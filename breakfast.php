<?php include 'includ/head.php';?> 
<link rel="stylesheet" href="css/breakfast.css">
<body data-spy="scroll" data-target="#navbarResponsive">
<?php include 'includ/connect.php';?> 

<?php include 'includ/navigation.php'; ?>
<div id="content">
    <div class="caption text-center">
      <h1>Завтраки до 13:00</h1>
      <div class="heading-underline"></div></div>
      <div class="row">
        <span id="modal_errors"class="bg-danger"></span>
    <div class="col-md-6">
      <div class="dishes">
    
<?php
  $sql=mysqli_query($link,'SELECT `id_bluda`,`id_cat`,`name`,`opis`,`cost`,`ves` FROM `bluda`WHERE `id_cat`=12');
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
<script type="text/javascript"></script>
<?php include 'includ/foter.php'; ?>