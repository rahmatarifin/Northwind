<!DOCTYPE html>
<html>
<head>
	<title>Customers</title>
</head>
<body>
<?php echo form_open('customers/tambah');?>
<pre>
	<h1>Tambah Data Customers</h1>
	CustomerID    	: <input type="text" name="CustomerID" placeholder="CustomerID" required></br>

	CompanyName    	: <input type="text" name="CompanyName" placeholder="CompanyName" required></br>

	ContactName    	: <input type="text" name="ContactName" placeholder="ContactName" required></br>

	ContactTitle    : <input type="text" name="ContactTitle" placeholder="ContactTitle" required></br>

	Address         : <input type="text" name="Address" placeholder="Address" required></br>

	City            : <input type="text" name="City" placeholder="City" required></br>

	Region          : <input type="text" name="Region" placeholder="Region" required></br>

	PostalCode      : <input type="text" name="PostalCode" placeholder="PostalCode" required></br>

	Country         : <input type="text" name="Country" placeholder="Country" required></br>

	Phone           : <input type="text" name="Phone" placeholder="Phone" required></br>

	Fax             : <input type="text" name="Fax" placeholder="Fax" required></br>

	<input type="submit" value="Simpan">
</pre>
<?php form_close(); ?>
<hr>
<table width="50%" border="1">
	<tr>
		<td colspan="13"><h1>Data Customer</h1></td>
	</tr>
	<tr>
		<td>CustomerID</td>
		<td>CompanyName</td>
		<td>ContactName</td>
		<td>ContactTitle</td>
		<td>Address</td>
		<td>City</td>
		<td>Region</td>
		<td>PostalCode</td>
		<td>Country</td>
		<td>Phone</td>
		<td>Fax</td>
		<td colspan="2">Aksi</td>
	</tr>
	<tr>
		<?php foreach($data as $row): ?>
			<td><?php echo $row->CustomerID;?></td>
			<td><?php echo $row->CompanyName;?></td>
			<td><?php echo $row->ContactName;?></td>
			<td><?php echo $row->ContactTitle;?></td>
			<td><?php echo $row->Address;?></td>
			<td><?php echo $row->City;?></td>
			<td><?php echo $row->Region;?></td>
			<td><?php echo $row->PostalCode;?></td>
			<td><?php echo $row->Country;?></td>
			<td><?php echo $row->Phone;?></td>
			<td><?php echo $row->Fax;?></td>
			<td><a href='<?php base_url();?>crud_customers/edit/<?php echo $row->CustomerID; ?>'>Edit</a></td>
			<td><a href='<?php base_url();?>crud_customers/hapus/<?php echo $row->CustomerID; ?>'>Hapus</a></td>
	</tr>
<?php endforeach; ?>
</table>
</body>
</html>