<?php

include "polycon.php";

echo $f=$_POST['firstname'];

echo $l=$_POST['lastname'];

echo $m=$_POST['mobile'];

echo $e=$_POST['email'];

echo $ma=$_POST['marks'];

echo $c=$_POST['coursetype'];

echo $g=$_POST['gender'];

$q ="INSERT INTO registration(firstname,lastname,mobile,email,marks,coursetype,gender) VALUES ('$f','$l','$m','$e','$ma','$c','$g')";

mysqli_query($rv,$q);

?>