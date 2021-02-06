<?php

$rv = mysqli_connect('localhost','root','','poly');

if($rv)
{
	echo "Successfully Submitted";
}
else{
	echo "Not submitted, Please try again";
}


?>