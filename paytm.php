<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

	
<!-- 	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 -->
	<style>
	.navbar-nav .nav-item .nav-link{
	padding: 10px;
    color: white;
    font-weight: 600;
    font-size: 18px;
	 }
</style>
</head>
<body>

	<nav class="navbar navbar-expand-sm navbar-dark a fixed-top">
		<div class="container">
				<img src="img/paytm.png" style="margin-left: 283px; height: 35px; width: 87px;margin-top: 15px;">
		</div><!--end container-->
	</nav><!--end nav-->

	<div>
		<h1 style="margin-left: 285px; font-family: 'Roboto', sans-serif; color: #585757;">Internship - General Application</h1>
		<h4 style="color: grey; margin-left: 285px;">NOIDA, BANGALORE /   CAREERS – INTERNSHIP /   PART-TIME</h4>
	</div>
	<br><br><br>

	<div>
		<h3 style="color: #585757; margin-left: 285px;">SUBMIT YOUR APPLICATION</h3>
	</div>
	<br><br>

	<form method="post" action="pay1.php">
		
		<label style="margin-left: 285px; color: grey;">Full Name*</label>
		<input type="text" name="fullname" style="margin-left: 110px; height: 23px; width: 427px;"><br><br><br>

		<label style="margin-left: 285px; color: grey;">Email*</label>
		<input type="text" name="email" style="margin-left: 140px; height: 23px; width: 427px;"><br><br><br>

		<label style="margin-left: 285px; color: grey;">Phone*</label>
		<input type="text" name="phone" style="margin-left: 140px; height: 23px; width: 427px;"><br><br><br>

		<label style="margin-left: 285px; color: grey;">Current company*</label>
		<input type="text" name="company" style="margin-left: 66px; height: 23px; width: 427px;"><br><br><br>
	<br><br>

	<div>
		<h3 style="color: #585757; margin-left: 285px;">LINKS</h3>
	</div><br><br>

	
		<label style="margin-left: 285px; color: grey;">LinkedIn URL</label>
		<input type="text" name="linkedin" style="margin-left: 94px; height: 23px; width: 427px;"><br><br><br>

		<label style="margin-left: 285px; color: grey;">Github URL</label>
		<input type="text" name="github" style="margin-left: 109px; height: 23px; width: 427px;"><br><br><br>

		<label style="margin-left: 285px; color: grey;">Other website</label>
		<input type="text" name="website" style="margin-left: 102px; height: 23px; width: 427px;"><br><br><br>
	

	<br><br>

	<div>
		<h3 style="color: #585757; margin-left: 285px;">ADDITIONAL INFORMATION</h3>
	</div><br><br>
	<textarea name="info" placeholder="Add a cover letter or anything else you want to share." style="margin-left: 283px; width: 713px; height: 122px;"></textarea><br><br><br><br><br>

	<center><input style="background-color: #0c92f3; border-color: #0b8ae6; color: white; height: 36px; width: 193px; border-radius: 5.2px;" type="submit" name="submit" value="SUBMIT APPLICATION"></center>

	</form>
</body>
</html>