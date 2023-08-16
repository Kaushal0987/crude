<?php
 if(isset($_POST['submit'])){
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $dob = $_POST["dob"];
  $gender = $_POST["gender"];
  $course = $_POST["course"];
  $city = $_POST["city"];
  $message = $_POST["message"];

  include("connection.php");
  $sql="INSERT INTO inquiry (firstname,lastname,email,dob,gender,course,city,message,status)
  VALUES('$firstname','$lastname','$email','$dob','$gender','$course','$city','$message',0)";

  $qry=mysqli_query($conn,$sql);
  if($qry)
  {
   echo "Data Inserted";
  }
  else
  {
   echo "Something wrong";
  }
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>add_inquiry</title>
</head>
<body>
 <form action="" method="post" enctype="multipart/form-date">
  <fieldset>
   <legend>Course inquiry form</legend>

   <label>First Name</label>
   <input type="text" name="firstname" required><br>

   <label>Last Name</label>
   <input type="text" name="lastname" required><br>

   <label>E-mail</label>
   <input type="email" name="email" id="email"><br>

   <label>Date Of Birth</label>
   <input type="date" name="dob" id="date" required><br>

   <label>Gender</label>
   <input type="radio" name="gender" value="male">Male
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="others">Others<br>

   <select name="city" id="city">
    <option value="kathmandu">Kathmandu</option>
    <option value="lalitpur">Lalitpur</option>
    <option value="bhaktapur">Bhaktapur</option>
    <option value="pokhara">Pokhara</option>
   </select><br>

   <label>Courses</label>
   <input type="checkbox" name="course" value="bca">BCA
   <input type="checkbox" name="course" value="bbs">BBS
   <input type="checkbox" name="course" value="mba">MBA
   <input type="checkbox" name="course" value="bsw">BSW<br>

   <label>Message</label>
   <input type="textarea" name="message" rows="5" column="50"><br>

   <input type="submit" name="submit" value="submit">
   <input type="reset" name="reset" value="reset">
  </fieldset>
 </form>
</body>
</html>