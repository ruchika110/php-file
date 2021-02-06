<?php

include ('dbcon2.php');

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$y="select * from internship2020 where id=$id";
	$f=mysqli_query($aa,$y);

	$u=mysqli_fetch_assoc($f);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>StudentName:<?php echo $u['studentname'] ?></h2>
	<h2>Email:<?php echo $u['email'] ?></h2>
	<h2>MobileNumber:<?php echo $u['mobilenumber'] ?></h2>
	<h2>Address:<?php echo $u['address'] ?></h2>
	<h2>Gender:<?php echo $u['gender'] ?></h2>
	<h2>College:<?php echo $u['college'] ?></h2>
	<h2>Qualification:<?php echo $u['qualification'] ?></h2>
	<h2>Branch:<?php echo $u['branch'] ?></h2>
	<h2>Semester:<?php echo $u['semester'] ?></h2>
	<h2>InternshipCourse:<?php echo $u['internshipcourse'] ?></h2>

</body>
</html>