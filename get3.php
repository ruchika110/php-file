<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		
		<h2 style="color: blue;"><b><u>Registration Form</u></b></h2>


	<form method="POST" action="ruchi2.php">
		
		Student Name:
		<input type="text" name="studentname" placeholder="Enter name"><br><br>

		Email:
		<input type="text" name="email" placeholder="Enter email"><br><br>

		Mobile Number:
		<input type="text" name="mobilenumber" placeholder="Enter mobile number"><br><br>

		Address:
		<input type="text" name="address"><br><br>

		Gender:
		<input type="radio"  id="" name="gender" value="male" required> Male <br>
		<input type="radio"  id="" name="gender" value="female" required> Female <br><br>

		College:
		<select name="college">
            <option value="0">Select</option>
            <option value="rjit">RJIT</option>
            <option value="shriram college">SHRIRAM COLLEGE OF ENGINEERING AND MANAGEMENT</option>
            <option value="mpct">MPCT</option>
            <option value="mits">MITS</option>
            <option value="itm">ITM</option>
            <option value="others">OTHERS</option>
        </select><br><br>

        Qualification:
        <select name="qualification">
            <option value="0">Select</option>
            <option value="btech">B.Tech</option>
            <option value="bca">B.C.A</option>
            <option value="mca">M.C.A</option>
            <option value="bsc">B.S.C</option>
            <option value="other">OTHER</option>
        </select><br><br>

        Branch:
        <select name="branch">
            <option value="0">Select</option>
            <option value="cse">C.S.E</option>
            <option value="it">I.T</option>
            <option value="ee">E.E</option>
            <option value="ec">E.C</option>
            <option value="mech">MECH.</option>
            <option value="civil">CIVIL</option>
            <option value="automobile">AUTOMOBILE</option>
            <option value="other">OTHER</option>
        </select><br><br>

        Semester:
        <select name="semester">
            <option value="0">Select</option>
            <option value="Ist">Ist Semester</option>
            <option value="IInd">IInd Semester</option>
            <option value="IIIrd">IIIrd Semester</option>
            <option value="IVth">IVth Semester</option>
            <option value="Vth">Vth Semester</option>
            <option value="VIth">VIth Semester</option>
            <option value="VIIth">VIIth Semester</option>
            <option value="VIIIth">VIIIth Semester</option>
        </select><br><br>

        Internship Course:
        <select name="internshipcourse">
            <option value="0">Select</option>
            <option value="Web Designing">Web Designing Internship Course (45 days)</option>
            <option value="Web Development">Web Development Internship Course (90 days)</option>
            <option value="Laravel">PHP</option>
            <option value="Laravel">Laravel 7</option>
            <option value="Angular">Angular 9</option>
            <option value="Angular">Vue Js</option>
            <option value="React JS">React JS</option>
            <option value="React Native">React Native</option>
        </select><br><br>

        <input style="background-color: blue;" type="submit" name="submit" value="submit">
	</form>

</body>
</html>