<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		
		<tr>
			<th>Id</th>
			<th>FirstName</th>
			<td>LastName</td>
			<th>Mobilenumber</th>
			<th>E-mail ID</th>
			<th>10th Marks</th>
			<th>CourseType</th>
			<th>Gender</th>
		</tr>

		<?php

		include "polycon.php";
		$d="select * from registration";

		$q=mysqli_query($rv,$d);
		while ($r= mysqli_fetch_array($q)) {

		?>

		<tr>
			<td><?php echo $r['id'];?></td>
			<td><?php echo $r['firstname'];?></td>
			<td><?php echo $r['lastname'];?></td>
			<td><?php echo $r['mobile'];?></td>
			<td><?php echo $r['email'];?></td>
			<td><?php echo $r['marks'];?></td>
			<td><?php echo $r['coursetype'];?></td>
			<td><?php echo $r['gender'];?></td>
			<td>
				<a href="polyview.php?id=<?php echo $r['id'];?>">View</a>
				<a href="polyedit.php?id=<?php echo $r['id'];?>">Edit</a>
				<a href="polydelete.php?id=<?php echo $r['id'];?>">Delete</a>
			</td>
		</tr>

		<?php
	}
	?>
	</table>

</body>
</html>