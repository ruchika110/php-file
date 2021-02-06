<?php

include('dbcon2.php');

$id = $_GET['id'];

$qu = "DELETE FROM implode WHERE id = $id";

mysqli_query($aa,$qu);

header('location:display_implode.php');

?>