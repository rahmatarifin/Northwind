<!DOCTYPE html>
<html>
<head>
	<title>Update Data Orders</title>
</head>
<body>
<?php foreach($data as $row): ?>
	<?php echo form_open('crud_orders/update');?>
	<h1>Edit Data Order</h1>
	<table>
		<tr>
			<td>OrderID</td>
			<td><input type="text" name="OrderID" value="<?php echo $row->OrderID;?>"></td>
		</tr>
		<tr>
			<td>CustomerID</td>
			<td><input type="text" name="CustomerID" value="<?php echo $row->CustomerID;?>"></td>
		</tr>
		<tr>
			<td>EmployeeID</td>
			<td><input type="text" name="EmployeeID" value="<?php echo $row->EmployeeID;?>"></td>
		</tr>
		<tr>
			<td>OrderDate</td>
			<td><input type="text" name="OrderDate" value="<?php echo $row->OrderDate;?>"></td>
		</tr>
		<tr>
			<td>RequiredDate</td>
			<td><input type="text" name="RequiredDate" value="<?php echo $row->RequiredDate;?>"></td>
		</tr>
		<tr>
			<td>ShippedDate</td>
			<td><input type="text" name="ShippedDate" value="<?php echo $row->ShippedDate;?>"></td>
		</tr>
		<tr>
			<td>ShipperID</td>
			<td><input type="text" name="ShipperID" value="<?php echo $row->ShipperID;?>"></td>
		</tr>
		<tr>
			<td>Freight</td>
			<td><input type="text" name="Freight" value="<?php echo $row->Freight;?>"></td>
		</tr>
		<tr>
			<td>ShipName</td>
			<td><input type="text" name="ShipName" value="<?php echo $row->ShipName;?>"></td>
		</tr>
		<tr>
			<td>ShipAddress</td>
			<td><input type="text" name="ShipAddress" value="<?php echo $row->ShipAddress;?>"></td>
		</tr>
		<tr>
			<td>ShipCity</td>
			<td><input type="text" name="ShipCity" value="<?php echo $row->ShipCity;?>"></td>
		</tr>
		<tr>
			<td>ShipRegion</td>
			<td><input type="text" name="ShipRegion" value="<?php echo $row->ShipRegion;?>"></td>
		</tr>
		<tr>
			<td>ShipPostalCode</td>
			<td><input type="text" name="ShipPostalCode" value="<?php echo $row->ShipPostalCode;?>"></td>
		</tr>
		<tr>
			<td>ShipCountry</td>
			<td><input type="text" name="ShipCountry" value="<?php echo $row->ShipCountry;?>"></td>
		</tr>

	</table>
	<input type="submit" value="Update">
<?php endforeach; ?>
<?php form_close();?>
</body>
</html>