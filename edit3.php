<?php

include ('dbcon3.php');

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$s="select * FROM user where id=$id";
	$f=mysqli_query($as,$s);

	$u=mysqli_fetch_assoc($f);
}
?>

<?php

 if(isset($_POST['update'])){

      echo $username = $_POST['username'];
       echo $email = $_POST['email'];
       echo $password = $_POST['password'];
       

       $q ="UPDATE user SET username = '$username',email = '$email',password = '$password' where id=$id";
       $f = mysqli_query($as, $q);

      // //if($fire)echo "data updated successfully.";
       header('Location:display3.php');

  } 

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>

	<div class="container" style="margin-top: 35px;">
		
  <form method="POST" action="">

	    <div class="form-group">
		<label>Username:</label>
		<input type="text" name="username"  class="form-control" style="width: 385px;" value="<?php echo $u['username']?>">
		</div>

		<div class="form-group">
		<label>Email:</label>
		<input type="text" name="email"  class="form-control" style="width: 385px;" value="<?php echo $u['email']?>">
		</div>

		<div class="form-group">
		<label>Password:</label>
		<input type="text" name="password"  class="form-control" style="width: 385px;" value="<?php echo $u['password']?>">
		</div>

		<div class="form-group">
		<input type="submit" name="update" class="btn btn-success" value="Update">
		</div>

</body>
</html>