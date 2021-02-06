<!--view code-->

<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From student1 where id=$id";
$fire =mysqli_query($con,$query);

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
//echo $user['username'];

}
?>

<!-- update code -->

<?php

 if(isset($_POST['update'])){

      echo $username = $_POST['username'];
       echo $password = $_POST['password'];

       $query ="UPDATE student1 SET username = '$username',password = '$password' where id=$id";
       $fire = mysqli_query($con, $query);

      // //if($fire)echo "data updated successfully.";
      if($fire) header("Location:display.php");

  } 



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post" action="">
		
		Username:
		<input type="text" name="username" placeholder="Username" value="<?php echo $user['username'] ?>"><br><br>

		Password:
		<input type="text" name="password" placeholder="Password" value="<?php echo $user['password'] ?>"><br><br>

		<input type="submit" name="update" value="Update">
	</form>

</body>
</html>