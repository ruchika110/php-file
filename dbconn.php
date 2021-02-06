<?php

$con = mysqli_connect('localhost', 'root', '', 'mits');

// mysqli_connect("servername","username","","databsename")


if($con)
{
	echo "Successfully Submitted";
}
else{

	echo "Not Submitted";

}

?>