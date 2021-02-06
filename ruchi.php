<?php

include"dbconn.php";

echo $name=$_POST['name'];

echo $email=$_POST['email'];

echo $city=$_POST['city'];

echo $college=$_POST['college'];

echo $branch=$_POST['branch'];

$q ="INSERT INTO itm (name, email, city, college, branch) VALUES ('$name', '$email', '$city', '$college', '$branch')";

  mysqli_query($con,$q);













?>