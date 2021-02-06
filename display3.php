<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<tr>
		<th>Id</th>
		<th>Personal Details</th>
		<th>Username</th>
		<th>Email</th>
		<th>Password</th>
	</tr>

	<?php

		include "dbcon3.php";
		$d="select * from user";

		$q=mysqli_query($as,$d);
		while ($r= mysqli_fetch_array($q)) {

		?>

		<tr>
			<td><?php echo $r['id'];?></td>
			<td><?php echo $r['username'];?></td>
			<td><?php echo $r['email'];?></td>
			<td><?php echo $r['password'];?></td>
			<td>
				<a href="view3.php?id=<?php echo $r['id'];?>">View</a>
				<a href="edit3.php?id=<?php echo $r['id'];?>">Edit</a>
				<a href="delete1.php?id=<?php echo $r['id'];?>">Delete</a>
			</td>
		</tr>

		<?php
	}
	?>
	</table>

</body>
</html>