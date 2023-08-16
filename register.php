<?php
 session_start();

 if(isset($_POST['register'])) {
     
  $username=$_POST['username'];
  $password =($_POST['password']);
  $mpass=md5($password);
  $email= $_POST['email'];

  $status=1;
  $role='user';
    
  include("connection.php");

  $sql = "INSERT INTO user (username, password, email, status, role) VALUES ('$username', '$mpass', '$email', '$status', '$role')";

  $qry = mysqli_query($conn, $sql);         // die(mysqli_error($conn)

  if($qry) {
   header("location: login.php");
   echo "Data has been registered.\n";
  } else {
   echo "Something went wrong:\n " . mysqli_error($conn);
  }
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Register</title>
</head>
<body>
<form method="POST" action="" enctype="multipart/form-data">
 <fieldset>
  <br>
  <br>
  <legend>User Register</legend>
  <input type="text" name="username" placeholder="Enter your Username" required> 
  <br>
  <br>
  <input type="password" name="password" placeholder="Create a new password" required>
  <br>
  <br>
  <input type ="email" name="email" placeholder="Enter your email" required>
  <br>
  <br>
  <input type="submit" name="register" value="Register">
  <br>
  <p>Already have an account? <a href="login.php">Log in</a></p>
 </fieldset>
</form>

</body>
</html>