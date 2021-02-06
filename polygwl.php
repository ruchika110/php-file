<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <?php include'bootstrap.php' ?> -->

</head>
<body>


	<div  style="background-color:#e1edef; margin: 86px; height: 500px;">
<br>
<center><h1><strong>Pre-Registration Form</strong></h1></center>

		<form method="post" action="poly1.php">
		
		<label style="margin-left: 105px;"><b>First Name</b></label>
		<input type="text" name="firstname" placeholder="Enter First Name" style="margin-left: 110px; height: 19px;">

		<br><br><label style="margin-left: 105px;"><b>Last Name</b></label>
		<input type="text" name="lastname" placeholder="Enter Last Name" style="margin-left: 114px; height: 19px;">

		<br><br><label style="margin-left: 105px;"><b>Mobile Number</b></label>
		<input type="text" name="mobile" placeholder="Enter Mobile No." style="margin-left: 80px; height: 19px;">

		<br><br><label style="margin-left: 105px;"><b>E-mail ID</b></label>
		<input type="text" name="email" placeholder="Email Address" style="margin-left: 121px; height: 19px;">

		<br><br><label style="margin-left: 105px;"><b>10</b><sup>th</sup><b> Marks</b></label>
		<input type="text" name="marks" placeholder="Enter Marks" style="margin-left: 117px; height: 19px;">

		<br><br><label style="margin-left: 105px;"><b>Course Type<b></label>
		<select name="coursetype" style="margin-left: 105px; height: 22px;">
		<option value="">Select Course Type</option>
		<option value="FT">Full-Time 3 Year Diploma</option>
		<option value="PT">Part-Time 4 Year Diploma</option>
		<option value="STC3">Part-Time 3 Month Course</option>
		<option value="STC6">Part-Time 6 Month Course</option>
		</select> 

		<br><br><label style="margin-left: 105px;"><b>Gender</b></label>
		<input type="radio" name="gender" value="male" checked="checked" style="margin-left: 138px; height: 19px;"> Male	
		<input type="radio" name="gender" value="female" style="margin-left: 5px; height: 19px;"> Female	
		<input type="radio" name="gender" value="other" style="margin-left: 3px; height: 19px;"> Other	
		<br><br>
		
		<button type="submit" class="btn btn-primary" name="upload" style="margin-left: 90px;height: 30px; width: 66px; border-radius: 6px;background-color: #337AB7;">Submit</button>
		
		</form>
		<p style="text-align:center;">
		<a style="color:red;" href="polydisplay.php">Click Here to See the list of Pre-Registered Students</a>
		</p>
		</div>
	</body>
</head>
</html>