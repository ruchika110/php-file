<?php

include "paytmcon.php";

echo $f=$_POST['fullname'];

echo $e=$_POST['email'];

echo $p=$_POST['phone'];

echo $c=$_POST['company'];

echo $l=$_POST['linkedin'];

echo $g=$_POST['github'];

echo $w=$_POST['website'];

echo $i=$_POST['info'];
$q ="INSERT INTO paytm1(fullname,email,phone,company,linkedin,github,website,info) VALUES ('$f','$e','$p','$c','$l','$g','$w','$i')";

mysqli_query($rv,$q);


?>