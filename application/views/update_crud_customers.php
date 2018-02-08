<!DOCTYPE html>
<html>
<head>
	<title>Update Data Customers</title>
</head>
<body>
<?php foreach($data as $row): ?>
	<?php echo form_open('crud_customers/update'); ?>
	<h1>Edit Data</h1>
	<table>
		<tr>
			<td>CustomerID</td>
			<td><input type="text" name="CustomerID" value="<?php echo $row->CustomerID; ?>"></td>
		</tr>
		<tr>
			<td>CompanyName</td>
			<td><input type="text" name="CompanyName" value="<?php echo $row->CompanyName; ?>"></td>
		</tr>
		<tr>
			<td>ContactName</td>
			<td><input type="text" name="ContactName" value="<?php echo $row->ContactName; ?>"></td>
		</tr>
		<tr>
			<td>ContactTitle</td>
			<td><input type="text" name="ContactTitle" value="<?php echo $row->ContactTitle; ?>"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="Address" value="<?php echo $row->Address; ?>"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="City" value="<?php echo $row->City; ?>"></td>
		</tr>
		<tr>
			<td>Region</td>
			<td><input type="text" name="Region" value="<?php echo $row->Region; ?>"></td>
		</tr>
		<tr>
			<td>PostalCode</td>
			<td><input type="text" name="PostalCode" value="<?php echo $row->PostalCode; ?>"></td>
		</tr>
		<tr>
			<td>Country</td>
			<td><input type="text" name="Country" value="<?php echo $row->Country; ?>"></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input type="text" name="Phone" value="<?php echo $row->Phone; ?>"></td>
		</tr>
		<tr>
			<td>Fax</td>
			<td><input type="text" name="Fax" value="<?php echo $row->Fax; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Update"></td>
		</tr>
	</table>
<?php endforeach; ?>
<?php form_close() ;?>
</body>
</html>