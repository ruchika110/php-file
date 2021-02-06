<?php

include ('dbcon3.php');

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$s="select * from user where id=$id";
	$f=mysqli_query($as,$s);

	$u=mysqli_fetch_assoc($f);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>UserName:<?php echo $u['username'] ?></h2>
	<h2>Email:<?php echo $u['email'] ?></h2>
	<h2>Password:<?php echo $u['password'] ?></h2>
	
</body>
</html>