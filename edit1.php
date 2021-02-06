<!--view code-->

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

<!-- update code -->

<?php

 if(isset($_POST['update'])){

      echo $name = $_POST['name'];
       echo $city = $_POST['city'];
       echo $college = $_POST['college'];
       echo $address = $_POST['address'];


       $q ="UPDATE delhi SET name = '$name',city = '$city',college = '$college',address = '$address' where id=$id";
       $f = mysqli_query($a, $q);

      // //if($fire)echo "data updated successfully.";
      if($f) header("Location:display1.php");

  } 



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post" action="">
		
		name:
		<input type="text" name="name" placeholder="Name" value="<?php echo $u['name'] ?>"><br><br>

		City:
		<input type="text" name="city" placeholder="City" value="<?php echo $u['city'] ?>"><br><br>

		College:
		<input type="text" name="college" placeholder="College" value="<?php echo $u['college'] ?>"><br><br>

		Address:
		<input type="text" name="address" placeholder="Address" value="<?php echo $u['address'] ?>"><br><br>

		<input type="submit" name="update" value="Update">
	</form>

</body>
</html>