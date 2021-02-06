<?php

$con = mysqli_connect('localhost', 'root', '', 'curd1');

// mysqli_connect("servername","username","","databsename")


if($con)
{
	echo "connected";
}
else{

	echo "not connect";

}

?>