<!--view code-->

<?php

include ('dbcon2.php');

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$y="select * from implode where id=$id";
	$f=mysqli_query($aa,$y);

	$u=mysqli_fetch_assoc($f);

	$s=$u['qualification'];
	// echo $s;
	$c=explode(",",$s); //explode string ko array me convert karta hai
	// echo $c;
}
?>

<!-- update code -->

<?php

 if(isset($_POST['update'])){

      echo $name = $_POST['name'];
       echo $college = $_POST['college'];
       echo $gender = $_POST['gender'];
       echo $qualification = $_POST['qualification'];
       $a=implode(",",$qualification);


       $q ="UPDATE delhi SET name = '$name',college = '$college',gender = '$gender',qualification = '$a' where id=$id";
       $f = mysqli_query($aa, $q);

      // //if($fire)echo "data updated successfully.";
      if($f) header("Location:display_implode.php");

  } 



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post" action="">
		
		Name:<input type="text" name="name" value="<?php echo $u['name']?>">
		<br><br>
		College:<select name="college" value="<?php echo $u['college']?>">
			<option value="itm">ITM</option>
			<option value="mits">MITS</option>
			<option value="amity">AMITY</option>
			<option value="rjit">RJIT</option>
			<option value="mpct">MPCT</option>
		</select>
		<br><br>
		Gender:
		<input type="radio" name="gender" value="Male"
		<?php
        if($u['gender']=="Male")
        {
        	echo "checked";
        }	
        ?>
        >Male
		<input type="radio" name="gender" value="Female"
		<?php
        if($u['gender']=="Female")
        {
        	echo "checked";
        }	
        ?>
        >Female
		<br><br>

		Qualification:<input type="checkbox" name="qualification" value="B.Tech"
		<?php
        if(in_array("B.Tech", $c))
        {
        	echo "checked";
        }	
        ?>
        >B.Tech
		<input type="checkbox" name="qualification" value="M.Tech"
		<?php
        if(in_array("M.Tech", $c))
        {
        	echo "checked";
        }	
        ?>>M.Tech
		<input type="checkbox" name="qualification" value="B.Com"
		<?php
        if(in_array("B.com", $c))
        {
        	echo "checked";
        }	
        ?>>B.Com
		<input type="checkbox" name="qualification" value="BCA"
		<?php
        if(in_array("BCA", $c))
        {
        	echo "checked";
        }	
        ?>>BCA
		<br><br>

		<input type="submit" name="update" value="Update">
	</form>

</body>
</html>