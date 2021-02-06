<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<table>
		
		<tr>
			<th>Id</th>
			<th>FullName</th>
			<td>Email</td>
			<th>Phone</th>
			<th>Current company</th>
			<th>LinkedIn</th>
			<th>Github</th>
			<th>Information</th>
		</tr>

		<?php

		include "paytmcon.php";
		$d="select * from paytm1";

		$q=mysqli_query($rv,$d);
		while ($r= mysqli_fetch_array($q)) {

		?>

		<tr>
			<td><?php echo $r['id'];?></td>
			<td><?php echo $r['fullname'];?></td>
			<td><?php echo $r['email'];?></td>
			<td><?php echo $r['phone'];?></td>
			<td><?php echo $r['company'];?></td>
			<td><?php echo $r['linkedin'];?></td>
			<td><?php echo $r['github'];?></td>
			<td><?php echo $r['info'];?></td>
			<td>
				<a href="paytmview.php?id=<?php echo $r['id'];?>">View</a>
				<a href="paytmedit.php?id=<?php echo $r['id'];?>">Edit</a>
				<a href="paytmdelete.php?id=<?php echo $r['id'];?>">Delete</a>
			</td>
		</tr>

		<?php
	}
	?>
	</table>

</body>
</html>