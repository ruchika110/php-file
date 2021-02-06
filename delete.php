<?php

include('dbcon2.php');

$id = $_GET['id'];

$qu = "DELETE FROM internship2020 WHERE id = $id";

mysqli_query($aa,$qu);

header('location:display2.php');

?>