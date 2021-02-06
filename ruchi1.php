<?php

include "dbcon1.php";

echo $n=$_POST['name'];

echo $c=$_POST['city'];

echo $clg=$_POST['college'];

echo $ad=$_POST['address'];

$q ="INSERT INTO delhi(name,city,college,address) VALUES ('$n','$c','$clg','$ad')";

mysqli_query($a,$q);


?>