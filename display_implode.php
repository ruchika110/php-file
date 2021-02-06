<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>College</th>
			<th>Gender</th>
			<th>Qualification</th>
			<th>Action</th>
		</tr>

		<?php

		include "dbcon2.php";
		$d="select * from implode";

		$q=mysqli_query($aa,$d);
		while ($r= mysqli_fetch_array($q)) {

		?>

		<tr>
			<td><?php echo $r['id'];?></td>
			<td><?php echo $r['name'];?></td>
			<td><?php echo $r['college'];?></td>
			<td><?php echo $r['gender'];?></td>
			<td><?php echo $r['qualification'];?></td>
			<td>
				<a href="view_implode.php?id=<?php echo $r['id'];?>">View</a>
				<a href="edit_implode.php?id=<?php echo $r['id'];?>">Edit</a>
				<a href="delete_implode.php?id=<?php echo $r['id'];?>">Delete</a>
			</td>
		</tr>

		<?php
	}
	?>
	</table>

</body>
</html>