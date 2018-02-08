<!DOCTYPE html>
<html>
<head>
	<title>Data Customers</title>
</head>
<body>
<table width="50%" border="1">
	<tr>
		<td>CustomerID</td>
		<td>CumpanyName</td>
		<td>ContactName</td>
		<td>ContactTitle</td>
		<td>Address</td>
		<td>City</td>
		<td>Region</td>
		<td>PostalCode</td>
		<td>Country</td>
		<td>Phone</td>
		<td>Fax</td>
	</tr>
	<tr>
	<?php foreach($data as $row): ?>
		<td><?php echo $row->CustomerID; ?></td>
		<td><?php echo $row->CompanyName; ?></td>
		<td><?php echo $row->ContactName; ?></td>
		<td><?php echo $row->ContactTitle; ?></td>
		<td><?php echo $row->Address; ?></td>
		<td><?php echo $row->City; ?></td>
		<td><?php echo $row->Region; ?></td>
		<td><?php echo $row->PostalCode; ?></td>
		<td><?php echo $row->Country; ?></td>
		<td><?php echo $row->Phone; ?></td>
		<td><?php echo $row->Fax; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
</body>
</html>