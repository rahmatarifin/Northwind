<!DOCTYPE html>
<html>
<head>
	<title>Data Orders</title>
</head>
<body>
<table width="60%" border="1">
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
	</tr>
<?php endforeach; ?>
</table>
</body>
</html>