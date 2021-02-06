<?php

$as = mysqli_connect('localhost','root','','github');

if($as)
{
	echo "Successfully Submitted";
}
else{
	echo "Not submitted, Please try again";
}


?>