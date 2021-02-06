<?php

$a = mysqli_connect('localhost','root','','amity');

if($a)
{
	echo "Successfully Submitted";
}
else{
	echo "Not submitted, Please try again";
}


?>