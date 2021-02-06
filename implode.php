<?php

include "dbcon2.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post" action="">
		
		Name:<input type="text" name="name">
		<br><br>
		College:<select name="college">
			<option value="itm">ITM</option>
			<option value="mits">MITS</option>
			<option value="amity">AMITY</option>
			<option value="rjit">RJIT</option>
			<option value="mpct">MPCT</option>
		</select>
		<br><br>
		Gender:<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Male">Female

		<br><br>

		Qualification:<input type="checkbox" name="qualification[]" value="B.Tech">B.Tech

		<input type="checkbox" name="qualification[]" value="M.Tech">M.Tech

		<input type="checkbox" name="qualification[]" value="B.Com">B.Com

		<input type="checkbox" name="qualification[]" value="BCA">BCA

<br><br>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>

<?php

if (isset($_POST['submit'])) {

echo $name=$_POST['name'];
echo $college=$_POST['college'];
echo $gender=$_POST['gender'];
 $qualification=$_POST['qualification'];

$a=implode(",",$qualification);
// echo "$a";
// print_r($qualification);

$q ="INSERT INTO implode(name, college, gender,qualification) VALUES ('$name','$college', '$gender','$a')";

  mysqli_query($aa,$q);
}

?>