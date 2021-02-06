<?php

include('dbcon3.php');

$id = $_GET['id'];

$qu = "DELETE FROM user WHERE id = $id";

mysqli_query($as,$qu);

header('location:display3.php');

?>