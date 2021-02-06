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
			<td>City</td>
			<th>College</th>
			<th>Address</th>
			<th>Action</th>
		</tr>

		<?php

		include "dbcon1.php";
		$d="select * from delhi";

		$q=mysqli_query($a,$d);
		while ($r= mysqli_fetch_array($q)) {

		?>

		<tr>
			<td><?php echo $r['id'];?></td>
			<td><?php echo $r['name'];?></td>
			<td><?php echo $r['city'];?></td>
			<td><?php echo $r['college'];?></td>
			<td><?php echo $r['address'];?></td>
			<td>
				<a href="view1.php?id=<?php echo $r['id'];?>">View</a>
				<a href="edit1.php?id=<?php echo $r['id'];?>">Edit</a>
				<a href="delete.php?id=<?php echo $r['id'];?>">Delete</a>
			</td>
		</tr>

		<?php
	}
	?>
	</table>

</body>
</html>