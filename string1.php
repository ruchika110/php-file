<?php
$name = strtoupper("vikas jain");
echo $name;

// //strtolower


$username ="vikas@gmail.com";
$entered = strtolower("Vikas@gmail.com");

if($username == $entered){

	echo "correct";

}
else{

	echo "Please check your username";
}

?>