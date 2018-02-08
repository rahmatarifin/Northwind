<!DOCTYPE html>
<html>
<head>
	<title>Data Categories</title>
</head>
<body>
<table width="50%" border="1">
	<tr>
		<td>CategoryID</td>
		<td>CategoryName</td>
		<td>Description</td>
	</tr>
	<tr>
	<?php foreach($data as $row): ?>
		<td><?php echo $row->CategoryID; ?></td>
		<td><?php echo $row->CategoryName; ?></td>
		<td><?php echo $row->Description; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
</body>
</html>