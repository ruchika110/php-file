<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<tr>
			<th>name</th>
			<th>username</th>
			<th>password</th>
			<th>confirm password</th>
			<th>image</th>
			<th>Action</th>
		</tr>

		<?php

		include "dbcon2.php";
		$d="select * from user";

		$q=mysqli_query($aa,$d);
		while ($r= mysqli_fetch_array($q)) {

		?>

		<tr>
			<td><?php echo $r['id'];?></td>
			<td><?php echo $r['name'];?></td>
			<td><?php echo $r['username'];?></td>
			<td><?php echo $r['password'];?></td>
			<td><img src="<?php echo $r['image'];?>" width="200px" height="80px"></td>
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