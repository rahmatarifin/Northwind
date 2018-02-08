<!DOCTYPE html>
<html>
<head>
	<title>Update Data Categories</title>
</head>
<body>
<?php foreach($data as $row): ?>
	<?php echo form_open('crud_categories/update'); ?>
	<h1>Edit Data Categories</h1>
	<table>
		<tr>
			<td>CategoryID</td>
			<td><input type="text" name="CategoryID" value="<?php echo $row->CategoryID; ?>"></td>
		</tr>
		<tr>
			<td>CategoryName</td>
			<td><input type="text" name="CategoryName" value="<?php echo $row->CategoryName; ?>"></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><input type="text" name="Description" value="<?php echo $row->Description; ?>"></td>
		</tr>
	</table>
	<input type="submit" value="Update">
<?php endforeach; ?>
<?php form_close(); ?>
</body>
</html>