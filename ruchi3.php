<?php

include "dbcon3.php";

echo $u=$_POST['username'];
echo $e=$_POST['email'];
echo $p=$_POST['password'];

$y="INSERT INTO user(username,email,password)VALUES('$u','$e','$p')";

mysqli_query($as,$y);

?>