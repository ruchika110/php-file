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

		Image:
		<input type="file" name="image">

		<br><br>

		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>

<?php

include "dbcon1.php";

 $n=$_POST['name'];

 $u=$_POST['username'];

 $p=$_POST['password'];

$filename=$_FILES['image'] ['name'];
$tempname=$_FILES['image'] ['tmp_name'];
$file="upload/".$filename;
move_uploaded_file($tempname,$file);

// echo "<img src='$file' height='100' width='100' />"

$w = "INSERT INTO user_registration(name,username,password,image)VALUES('$n','$u','$p','$file')";

$f=mysqli_query($a,$w);

?>