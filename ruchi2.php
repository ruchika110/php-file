<?php

include "dbcon2.php";

echo $n=$_POST['studentname'];

echo $e=$_POST['email'];

echo $m=$_POST['mobilenumber'];

echo $ad=$_POST['address'];

echo $g=$_POST['gender'];

echo $c=$_POST['college'];

echo $q=$_POST['qualification'];

echo $b=$_POST['branch'];

echo $s=$_POST['semester'];

echo $i=$_POST['internshipcourse'];

$q ="INSERT INTO internship2020(studentname,email,mobilenumber,address,gender,college,qualification,branch,semester,internshipcourse) VALUES ('$n','$e','$m','$ad','$g','$c','$q','$b','$s','$i')";

mysqli_query($aa,$q);


?>