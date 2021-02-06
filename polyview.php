<?php

include ('polycon.php');

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$y="select * from registration where id=$id";
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
	<h2>FirstName:<?php echo $u['firstname'] ?></h2>
	<h2>LastName:<?php echo $u['lastname'] ?></h2>
	<h2>MobileNumber:<?php echo $u['mobile'] ?></h2>
	<h2>E-mailID:<?php echo $u['email'] ?></h2>
	<h2>10thMarks:<?php echo $u['marks'] ?></h2>
	<h2>CourseType:<?php echo $u['coursetype'] ?></h2>
	<h2>Gender:<?php echo $u['gender'] ?></h2>
	
</body>
</html>