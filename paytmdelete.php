<?php

include('paytmcon.php');

$id = $_GET['id'];

$qu = "DELETE FROM paytm1 WHERE id = $id";

mysqli_query($rv,$qu);

header('location:paytmdisplay.php');

?>