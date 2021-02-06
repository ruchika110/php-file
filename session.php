<?php

session_start();

$_SESSION['username'] ="Ruchika Verma"; //variable
$_SESSION['course'] ="b tech.";

echo $_SESSION['username'];
echo $_SESSION['course'];

session_unset(); //session end

//echo $_SESSION['username'];

echo $_SESSION['username'];
echo $_SESSION['course'];










?>