<!DOCTYPE html>
<html>
<head>
	<title>Categories</title>
	<style type="text/css">
		a{
			border: 1px black;
			margin: 1px;
		}
	</style>
</head>
<body>

<?php echo form_open('categories/tambah')?>

<pre>
	<h1> Tambah Data Categories </h1>
	
	CategoryID  : <input type="text" name="CategoryID" placeholder="CategoryID" required autofocus></br>
	
	CategoryName : <input type="text" name="CategoryName" placeholder="CategoryName" required></br>

	Description  : <input type="text" name="Description" placeholder="Description" required></br>

	<input type="submit" value="simpan">

</pre>
<?php form_close(); ?>

<hr>
<div>
<table width="40%" border="1">
	<tr>
		<td colspan="5"><h1>Data Categories</h1></td>
	</tr>
	<tr>
		<td>CategoryID</td>
		<td>CategoryName</td>
		<td>Description</td>
		<td colspan="2">Aksi</td>
	</tr>
	<tr>
		<?php foreach($data as $row): ?>
			<td><?php echo $row->CategoryID;?></td>
			<td><?php echo $row->CategoryName;?></td>
			<td><?php echo $row->Description;?></td>
			<td><a href='<?php base_url(); ?>crud_categories/edit/<?php echo $row->CategoryID; ?>'>Edit</a></td>
			<td><a href='<?php base_url(); ?>crud_categories/hapus/<?php echo $row->CategoryID; ?>'>Hapus</a></td>
	</tr>
<?php endforeach;?>
</table>
</div>
</body>
</html>