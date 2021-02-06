<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post" enctype="multipart/form-data">
		
		Name:
		<input type="text" name="name"><br><br>

		Username:
		<input type="text" name="username"><br><br>

		Password:
		<input type="text" name="password"><br><br>

		Confirm Password:
		<input type="text" name="confirmpassword"><br><br>

		Image:
		<input type="file" name="image"><br><br>

		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>

<?php

include "dbcon2.php";

 echo $n=$_POST['name'];

 echo $u=$_POST['username'];

 echo $p=$_POST['password'];

 echo $c=$_POST['confirmpassword'];

$filename=$_FILES['image'] ['name'];
$tempname=$_FILES['image'] ['tmp_name'];
$file="upload/".$filename;
move_uploaded_file($tempname,$file);

// echo "<img src='$file' height='100' width='100' />"

$w = "INSERT INTO user(name,username,password,confirmpassword,image)VALUES('$n','$u','$p','$c','$file')";

$f=mysqli_query($aa,$w);


?>