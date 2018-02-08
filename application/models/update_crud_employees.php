<!DOCTYPE html>
<html>
<head>
	<title>Update Data Employees</title>
</head>
<body>
<?php foreach($data as $row): ?>
	<?php echo form_open('crud_employees/update'); ?>
	<h1>Edit Data Employees</h1>
	<table>
		<tr>
			<td>EmployeeID</td>
			<td><input type="text" name="EmployeeID" value="<?php echo $row->EmployeeID; ?>"></td>
		</tr>
		<tr>
			<td>LastName</td>
			<td><input type="text" name="LastName" value="<?php echo $row->LastName; ?>"></td>
		</tr>
		<tr>
			<td>FirstName</td>
			<td><input type="text" name="FirstName" value="<?php echo $row->FirstName; ?>"></td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" name="Title" value="<?php echo $row->Title; ?>"></td>
		</tr>
		<tr>
			<td>TitleOfCourtesy</td>
			<td><input type="text" name="TitleOfCourtesy" value="<?php echo $row->TitleOfCourtesy; ?>"></td>
		</tr>
		<tr>
			<td>BirthDate</td>
			<td><input type="text" name="BirthDate" value="<?php echo $row->BirthDate;?>"></td>
		</tr>
		<tr>
			<td>HireDate</td>
			<td><input type="text" name="HireDate" value="<?php echo $row->HireDate; ?>"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="Address" value="<?php echo $row->Address; ?>"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="City" value="<?php echo $row->City;?>"></td>
		</tr>
		<tr>
			<td>Region</td>
			<td><input type="text" name="Region" value="<?php echo $row->Region;?>"></td>
		</tr>
		<tr>
			<td>PostalCode</td>
			<td><input type="text" name="PostalCode" value="<?php echo $row->PostalCode;?>"></td>
		</tr>
		<tr>
			<td>Country</td>
			<td><input type="text" name="Country" value="<?php echo $row->Country;?>"></td>
		</tr>
		<tr>
			<td>HomePhone</td>
			<td><input type="text" name="HomePhone" value="<?php echo $row->HomePhone;?>"></td>
		</tr>
		<tr>
			<td>Extension</td>
			<td><input type="text" name="Extension" value="<?php echo $row->Extension;?>"></td>
		</tr>
		<tr>
			<td>Notes</td>
			<td><input type="text" name="Notes" value="<?php echo $row->Notes;?>"></td>
		</tr>
		<tr>
			<td>ReportsTo</td>
			<td><input type="text" name="ReportsTo" value="<?php echo $row->ReportsTo;?>"></td>
		</tr>
		<tr>
			<td>sex</td>
			<td><input type="text" name="sex" value="<?php echo $row->sex;?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Update"></td>
		</tr>
	</table>
<?php endforeach;?>
<?php form_close();?>
</body>
</html>