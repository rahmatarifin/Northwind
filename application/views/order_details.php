<!DOCTYPE html>
<html>
<head>
	<title>Data Order Detail</title>
</head>
<body>
<table width="60%" border="1">
	<tr>
		<td>odID</td>
		<td>OrderID</td>
		<td>ProductID</td>
		<td>UnitPrice</td>
		<td>Quantity</td>
		<td>Discount</td>
	</tr>
	<tr>
	<?php foreach($data as $row):?>
		<td><?php echo $row->odID;?></td>
		<td><?php echo $row->OrderID;?></td>
		<td><?php echo $row->ProductID;?></td>
		<td><?php echo $row->UnitPrice;?></td>
		<td><?php echo $row->Quantity;?></td>
		<td><?php echo $row->Discount;?></td>
	</tr>
	<?php endforeach; ?>
</table>
</body>
</html>