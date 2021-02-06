<?php
include ('dbcon2.php');

if (isset($_GET['id']))
{
 $id =$_GET['id'];
$query ="select * From implode where id=$id";
$fire =mysqli_query($aa,$query);

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
//echo $user['username'];

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Name:<?php echo $user['name'] ?></h2>
	<h2>College:<?php echo $user['college'] ?></h2>
	<h2>Gender:<?php echo $user['gender']?></h2>
	<h2>Qualification:<?php echo $user['qualification']?></h2>

</body>
</html>