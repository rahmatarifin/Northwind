<!DOCTYPE html>
<html>
<head>
	<title>Data Employees</title>
</head>
<body>
	<table width="40%" border="1">
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
			<td>Photo</td>
			<td>Notes</td>
			<td>ReportsTo</td>
			<td>sex</td>
		</tr>
		<tr>
			<?php foreach($data as $row):?>
			<td><?php echo $row->EmployeeID; ?></td>
			<td><?php echo $row->LastName; ?></td>
			<td><?php echo $row->FirstName; ?></td>
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
			<td><?php echo $row->Photo; ?></td>
			<td><?php echo $row->Notes; ?></td>
			<td><?php echo $row->ReportsTo; ?></td>
			<td><?php echo $row->sex; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>