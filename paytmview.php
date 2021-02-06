<?php

include ('paytmcon.php');

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$y="select * from paytm1 where id=$id";
	$f=mysqli_query($rv,$y);

	$u=mysqli_fetch_assoc($f);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>StudentName:<?php echo $u['fullname'] ?></h2>
	<h2>Email:<?php echo $u['email'] ?></h2>
	<h2>MobileNumber:<?php echo $u['phone'] ?></h2>
	<h2>Address:<?php echo $u['company'] ?></h2>
	<h2>Gender:<?php echo $u['linkedin'] ?></h2>
	<h2>College:<?php echo $u['github'] ?></h2>
	<h2>Qualification:<?php echo $u['website'] ?></h2>
	<h2>Branch:<?php echo $u['info'] ?></h2>
	
</body>
</html>