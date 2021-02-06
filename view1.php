<?php

include ('dbcon1.php');

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$y="select * from delhi where id=$id";
	$f=mysqli_query($a,$y);

	$u=mysqli_fetch_assoc($f);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Name:<?php echo $u['name'] ?></h2>
	<h2>City:<?php echo $u['city'] ?></h2>
	<h2>College:<?php echo $u['college'] ?></h2>
	<h2>Address:<?php echo $u['address'] ?></h2>

</body>
</html>