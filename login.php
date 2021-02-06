<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="" method="post">
		
		<input type="text" name="username" placeholder="enter username"><br><br>

		<input type="text" name="password" placeholder="enter password"><br><br>

		<input type="submit" name="login" value="Login">

	</form>

</body>
</html>


<?php

include ('dbcon1.php');
if (isset($_POST['login']))
{
	 $user = $_POST['username'];
	 $pwd = $_POST['password'];

$query = "SELECT * FROM user_registration WHERE username = '$user' && password = '$pwd'";

$data = mysqli_query($a,$query);

$total = mysqli_num_rows($data); //boolen value dega either 1 or 0

// echo $total;

if($total==1){
	
	$_SESSION['username'] =$user;
	header('location:logindata.php');
}
else{
	echo "login failed";
}
}

?>