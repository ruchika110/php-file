<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		
		<tr>
			<th>Id</th>
			<th>StudentName</th>
			<td>Email</td>
			<th>Mobilenumber</th>
			<th>Address</th>
			<th>Gender</th>
			<th>College</th>
			<th>Qualification</th>
			<th>Branch</th>
			<th>Semester</th>
			<th>Internshipcourse</th>
			<th>Action</th>
		</tr>

		<?php

		include "dbcon2.php";
		$d="select * from internship2020";

		$q=mysqli_query($aa,$d);
		while ($r= mysqli_fetch_array($q)) {

		?>

		<tr>
			<td><?php echo $r['id'];?></td>
			<td><?php echo $r['studentname'];?></td>
			<td><?php echo $r['email'];?></td>
			<td><?php echo $r['mobilenumber'];?></td>
			<td><?php echo $r['address'];?></td>
			<td><?php echo $r['gender'];?></td>
			<td><?php echo $r['college'];?></td>
			<td><?php echo $r['qualification'];?></td>
			<td><?php echo $r['branch'];?></td>
			<td><?php echo $r['semester'];?></td>
			<td><?php echo $r['internshipcourse'];?></td>
			<td>
				<a href="view2.php?id=<?php echo $r['id'];?>">View</a>
				<a href="edit2.php?id=<?php echo $r['id'];?>">Edit</a>
				<a href="delete.php?id=<?php echo $r['id'];?>">Delete</a>
			</td>
		</tr>

		<?php
	}
	?>
	</table>

</body>
</html>