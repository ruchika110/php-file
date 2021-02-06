<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

<table>

	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Password</th>
		<th>Action</th>
	</tr>

	<?php
	include "dbcon.php";
	$data="select * from student1";

	$q=mysqli_query($con, $data);
    while ($result = mysqli_fetch_array($q)){
?>
	<tr>
	   <td><?php echo $result['id'];?></td>
	   <td><?php echo $result['username'];?></td>
	   <td><?php echo $result['password'];?></td>
	   <td>
	   	   <a href="view.php?id=<?php echo $result['id'];?>">View</a>
	   	   <a href="edit.php?id=<?php echo $result['id'];?>">Edit</a>
	   	   <a href="">Edit</a>
	   	   <a href="">Delete</a>
	   </td>	   
	</tr> 

	<?php
	}
	?>
	</table>

</body>
</html>