<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
</head>
<body>
<?php echo form_open('orders/tambah'); ?>
<pre>
	<h1>Tambah Data Orders</h1>
	OrderID         : <input type="text" name="OrderID" placeholder="OrderID" required autofocus></br>

	CustomerID      : <input type="text" name="CustomerID" placeholder="CustomerID" required></br>

	EmployeeID      : <input type="text" name="EmployeeID" placeholder="EmployeeID" required></br>

	OrderDate       : <input type="text" name="OrderDate" placeholder="OrderDate" required></br>

	RequiredDate    : <input type="text" name="RequiredDate" placeholder="RequiredDate" required></br>

	ShippedDate     : <input type="text" name="ShippedDate" placeholder="ShippedDate" required></br>

	ShipperId       : <input type="text" name="ShipperID" placeholder="ShipperID" required></br>

	Freight         : <input type="text" name="Freight" placeholder="Freight" required></br>

	ShipName        : <input type="text" name="ShipName" placeholder="ShipName" required></br>

	ShipAddress     : <input type="text" name="ShipAddress" placeholder="ShipAddress" required></br>

	ShipCity        : <input type="text" name="ShipCity" placeholder="ShipCity" required></br>

	ShipRegion      : <input type="text" name="ShipRegion" placeholder="ShipRegion" required></br>

	ShipPostalCode  : <input type="text" name="ShipRegionCode" placeholder="ShipPostalCode" required></br>

	ShipCountry     : <input type="text" name="ShipCountry" placeholder="ShipCountry" required></br>

	<input type="submit" value="Simpan">
</pre>
<?php form_close(); ?>
<hr>
<table width="60%" border="1">
	<tr colspan="14">Data Orders</tr>
	<tr>
		<td>OrderID</td>
		<td>CustomerID</td>
		<td>EmployeeID</td>
		<td>OrderDate</td>
		<td>RequiredDate</td>
		<td>ShippedDate</td>
		<td>ShipperID</td>
		<td>Freight</td>
		<td>ShipName</td>
		<td>ShipAddress</td>
		<td>ShipCity</td>
		<td>ShipRegion</td>
		<td>ShipPostalCode</td>
		<td>ShipCountry</td>
		<td colspan="2">Aksi</td>

	</tr>
	<tr>
	<?php foreach($data as $row): ?>
		<td><?php echo $row->OrderID; ?></td>
		<td><?php echo $row->CustomerID; ?></td>
		<td><?php echo $row->EmployeeID; ?></td>
		<td><?php echo $row->OrderDate; ?></td>
		<td><?php echo $row->RequiredDate; ?></td>
		<td><?php echo $row->ShippedDate; ?></td>
		<td><?php echo $row->ShipperID; ?></td>
		<td><?php echo $row->Freight; ?></td>
		<td><?php echo $row->ShipName; ?></td>
		<td><?php echo $row->ShipAddress; ?></td>
		<td><?php echo $row->ShipCity; ?></td>
		<td><?php echo $row->ShipRegion; ?></td>
		<td><?php echo $row->ShipPostalCode; ?></td>
		<td><?php echo $row->ShipCountry; ?></td>
		<td><a href='<?php base_url(); ?>crud_orders/edit/<?php echo $row->OrderID; ?>'>Edit</td>
		<td><a href='<?php base_url(); ?>crud_orders/hapus/<?php echo $row->OrderID; ?>'>Hapus</td>
	</tr>
<?php endforeach; ?>
</table>
</body>
</html>