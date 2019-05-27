<?php include 'includ/head.php';?> 
 <link rel="stylesheet" href="../css/main.css">
<body data-spy="scroll" data-target="#navbarResponsive">
<?php require_once 'includ/connect.php';
?>


<?php include 'includ/nav.php';

$sql="SELECT*FROM bluda ORDER BY id_bluda";
$results=$link->query($sql);

  //Если переменная Name передана
  if (isset($_POST["name"])) {
  	 if (isset($_GET['edit'])) {
  	 	// обновление
        $sql = mysqli_query($link, "UPDATE `bluda` SET `id_bluda` = '{$_POST['id_bluda']}',`id_cat` = '{$_POST['id_cat']}',`name` = '{$_POST['name']}',`opis` = '{$_POST['opis']}',`cost` = '{$_POST['cost']}',`ves` = '{$_POST['ves']}' WHERE `id_bluda`={$_GET['edit']}");
      }
      else{
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO `bluda` (`id_bluda`,`id_cat`,`name`,`opis`, `cost`,`ves`) VALUES ('{$_POST['id_bluda']}','{$_POST['id_cat']}', '{$_POST['name']}','{$_POST['opis']}','{$_POST['cost']}','{$_POST['ves']}')");}
    //Если вставка прошла успешно
    if ($sql) {
      echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
  }
   if (isset($_GET['delete'])) {
    $sql = mysqli_query($link, "DELETE FROM `bluda` WHERE `id_bluda` = {$_GET['delete']}");
    if ($sql) {
      echo "<p>Товар удален.</p>";
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
  }
  if (isset($_GET['edit'])) {
      $sql = mysqli_query($link, "SELECT `id_bluda`,`id_cat`, `name`, `opis`,`cost`,`ves` FROM `bluda` WHERE `id_bluda`={$_GET['edit']}");
      $dish = mysqli_fetch_array($sql);
    }

?>
 
<div class="editb">
<div class="narrow">

	<div class="col-12">

		<h2 class="heading">Редактирование</h2>
		<div class="heading-underline"></div>
		<h3 class="text-center">Добавление блюда</h3>
	</div>
	<div class="r ">
	<form action="" method="post"  >
  <table class="table table-auto " >
    <tr>
      <td>Наименование:</td>
      <td><input type="text" name="name" value="<?=  isset($_GET['edit']) ?  $dish['name'] : ''; ?>"></td>
    </tr>
    <tr>
      <td>№ Блюда:</td>
      <td><input type="text" name="id_bluda"value="<?= isset($_GET['edit']) ?  $dish['id_bluda'] : ''; ?>"></td>
    </tr>
    <tr>
      <td>№ Категории:</td>
      <td><input type="text" name="id_cat"value="<?= isset($_GET['edit']) ?  $dish['id_cat'] : ''; ?>"></td>
    </tr>
 <tr>
      <td>Описание:</td>
      <td><input type="text" name="opis" value="<?= isset($_GET['edit']) ?  $dish['opis'] : ''; ?>"> </td>
    </tr>
    <tr>
      <td>Цена:</td>
      <td><input type="text" name="cost" size="3" value="<?= isset($_GET['edit']) ?  $dish['cost'] : ''; ?>"> </td>
    </tr>
    <tr>
      <td>Вес:</td>
      <td><input type="text" name="ves" size="3" value="<?= isset($_GET['edit']) ?  $dish['ves'] : ''; ?>"> </td>
    </tr>
   
    <tr>
      <td colspan="6"><input type="submit" class="btn3 btn3-success"value="OK"></td>
    </tr>
  </table>
</form>
</div>
<div class="col-12">
<table class="table table-responsive table-bordered table-striped">
<thead>
	<th></th>
	<th>id блюда</th>
	<th>id категории</th>
	<th>название  блюда</th>
	<th>описание</th>
	<th>вес</th>
	<th>цена</th>
	<th></th>
	
</thead>
<tbody>
	<?php while($dish=mysqli_fetch_assoc($results)):?>
<tr>
  <td><a href="editbd.php?edit=<?=$dish['id_bluda']?>" class="btn2 btn-xs btn-default"><i class="fas fa-pen"></i>
</a></td> <td><?=$dish['id_bluda']?> </td>
<td><?=$dish['id_cat']?> </td>
<td><?=$dish['name']?> </td>
 <td><?= $dish['opis'] ?></td> 
<td><?= $dish['ves'] ?></td> 
<td><?=$dish['cost']?></td> 
<td><a href="editbd.php?delete=<?=$dish['id_bluda']?>"class="btn2 btn-xs btn-default"><i class="fas fa-minus"></i>
</a></td> 
</tr>
<?php endwhile;?>
</tbody>
</table>
</div>
</div>
</div>



<script src="../js/bootstrap.min.js"></script>
</body>
</html>