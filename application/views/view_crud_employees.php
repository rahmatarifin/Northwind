<!DOCTYPE html>
<html>
<head>
	<title>Data Employees</title>
</head>
<body>
<?php echo form_open('employees/tambah'); ?>
<pre>
	<h1>Tambah Data Employees</h1>
	EmployeeID      : <input type="text" name="EmployeeID" placeholder="EmployeeID" required></br>

	LastName        : <input type="text" name="LastName" placeholder="LastName" required></br>

	FirstName       : <input type="text" name="FirstName" placeholder="FirstName" required></br>

	Title           : <input type="text" name="Title" placeholder="Title" required></br>

	TitleOfCourtesy : <input type="text" name="TitleOfCourtesy" placeholder="TitleOfCourtesy" required></br>

	BirthDate       : <input type="text" name="BirthDate" placeholder="BirthDate" required></br>

	HireDate        : <input type="text" name="HireDate" placeholder="HireDate" required></br>

	Address         : <input type="text" name="Address" placeholder="Address" required></br>

	City            : <input type="text" name="City" placeholder="City" required></br>

	Region          : <input type="text" name="Region" placeholder="Region" required></br>

	PostalCode      : <input type="text" name="PostalCode" placeholder="PostalCode" required></br>

	Country         : <input type="text" name="Country" placeholder="Country" required></br>

	HomePhone       : <input type="text" name="HomePhone" placeholder="HomePhone" required>

	Extension       : <input type="text" name="Extension" placeholder="Extension" required>	</br>

	ReportsTo       : <input type="text" name="ReportsTo" placeholder="ReportsTo" required></br>

	sex             : <input type="text" name="sex" placeholder="sex" required></br>

	<input type="submit" value="Simpan">
</pre>
<?php form_close(); ?>
<hr>
<table width="99%" border="1">
	<tr>
		<td colspan="19">Data Employees</td>
	</tr>
	<tr>
		<td>EmployeeID</td>
		<td>LastName</td>
			<td>FirstName</td>
			<td>Title</td>
			<td>TitleOsCourtesy</td>
			<td>BirthDate</td>
			<td>HireDate</td>
			<td>Address</td>
			<td>City</td>
			<td>Region</td>
			<td>PostalCode</td>
			<td>Country</td>
			<td>HomePhone</td>
			<td>Extension</td>
			<td>Notes</td>
			<td>ReportsTo</td>
			<td>sex</td>
			<td colspan="2">Aksi</td>
	</tr>
	<tr>
		<?php foreach($data as $row):?>
			<td><?php echo $row->EmployeeID; ?></td>
			<td><?php echo $row->LastName; ?></td>
			<td><?php echo $row->Title; ?></td>
			<td><?php echo $row->TitleOfCourtesy; ?></td>
			<td><?php echo $row->BirthDate; ?></td>
			<td><?php echo $row->HireDate; ?></td>
			<td><?php echo $row->Address; ?></td>
			<td><?php echo $row->City; ?></td>
			<td><?php echo $row->Region; ?></td>
			<td><?php echo $row->PostalCode; ?></td>
			<td><?php echo $row->Country; ?></td>
			<td><?php echo $row->HomePhone; ?></td>
			<td><?php echo $row->Extension; ?></td>
			<td><?php echo $row->Notes; ?></td>
			<td><?php echo $row->ReportsTo; ?></td>
			<td><?php echo $row->sex; ?></td>
			<td><a href='<?php base_url();?>crud_employees/edit/<?php echo $row->EmployeeID;?>'>Edit</a></td>
			<td><a href='<?php base_url();?>crud_employees/hapus/<?php echo $row->EmployeeID;?>'>Hapus</a></td>
	</tr>
<?php endforeach; ?>
</table>
</body>
</html>