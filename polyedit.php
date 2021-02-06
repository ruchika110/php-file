<!--view code-->

<?php

include ('polycon.php');

if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $y="select * from registration where id=$id";
    $f=mysqli_query($rv,$y);

    $u=mysqli_fetch_assoc($f);
}
?>

<!-- update code -->

<?php

 if(isset($_POST['update'])){

      echo $firstname = $_POST['firstname'];
       echo $lastname = $_POST['lastname'];
       echo $mobile = $_POST['mobile'];
       echo $email = $_POST['email'];
       echo $marks = $_POST['marks'];
       echo $coursetype= $_POST['coursetype'];
       echo $gender = $_POST['gender'];


       $q ="UPDATE registration SET firstname = '$firstname',lastname = '$elastname',mobile = '$mobile',email = '$email',marks = '$marks',coursetype = '$coursetype',gender = '$gender', where id=$id";
       $f = mysqli_query($rv, $q);

      // //if($fire)echo "data updated successfully.";
      if($f) header("Location:polydisplay.php");

  } 



?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <form method="post" action="">
        
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
        <option value="FT"

         <?php
            if($u["coursetype"]=='FT')
            {
                echo "selected";
            }
            ?>

            >Full-Time 3 Year Diploma</option>
        <option value="PT"

         <?php
            if($u["coursetype"]=='PT')
            {
                echo "selected";
            }
            ?>

            >Part-Time 4 Year Diploma</option>


        <option value="STC3"

        <?php
            if($u["coursetype"]=='STC3')
            {
                echo "selected";
            }
            ?>

            >Part-Time 3 Month Course</option>


        <option value="STC6"

        <?php
            if($u["coursetype"]=='STC6')
            {
                echo "selected";
            }
            ?>

            >Part-Time 6 Month Course</option>
        </select> 

        <br><br><label style="margin-left: 105px;"><b>Gender</b></label>
        <input type="radio" name="gender" value="male"

        <?php
            if($u["gender"]=='male')
            {
                echo "checked";
            }
            ?>

            style="margin-left: 5px; height: 19px;"> Female    
        <input type="radio" name="gender" value="other"

        <?php
            if($u["gender"]=='other')
            {
                echo "checked";
            }
            ?>

             style="margin-left: 3px; height: 19px;"> Other  
        <br><br>
        
        <button type="submit" class="btn btn-primary" name="upload" style="margin-left: 90px;height: 30px; width: 66px; border-radius: 6px;background-color: #337AB7;">Submit</button>

         <input style="background-color: blue;" type="submit" name="submit" value="submit">
    
        </form>

</body>
</html>