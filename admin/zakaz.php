<?php include 'includ/head.php';?> 
 <link rel="stylesheet" href="../css/main.css">
<body data-spy="scroll" data-target="#navbarResponsive">
<?php require_once 'includ/connect.php';?> 
<div class="zakaz">
<?php include 'includ/nav.php'; 


?>

<div class="narrow">

	<div class="col-12">

		<h3 class="heading">Заказы</h3>
		<div class="heading-underline"></div>
	</div>
	<div class="col-12">
<table class="table table-responsive table-bordered table-striped">
<thead>
	<th></th>
	<th>№ Заказа</th>
	<th>Дата заказа</th>
	<th>Время заказа</th>
	<th>Стоимость заказа</th>
	<th>Дата доставки</th>
	<th>Время доставки</th>
	<th>Адрес </th>
	<th>Имя</th>
	<th>Телефон</th>
	<th>Название блюда</th>
	<th>Количество</th>
	<th>Цена блюда</th>
	<th></th>
</thead>
<tbody>
<tr>
  <td><a href="editbd.php?edit=1" class="btn2 btn-xs btn-default"><i class="fas fa-pen"></i>
</a></td> <td> </td>
<td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td><td></td> <td></td> <td><a href="editbd.php?delete=1"class="btn2 btn-xs btn-default"><i class="fas fa-minus"></i>
</a></td> 
</tr>
</tbody>
</table>
</div>
</div>
</div>

<script src="../js/bootstrap.min.js"></script>
</body>
</html>