<?php
 if(isset($_POST['submit'])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $role ="user";
  $status = 0;

  include("connection.php");

  $sql = "INSERT INTO user (username, password, email, role, status) VALUES ('$username', '$password', '$email', '$role', '$status')";

  $qry = mysqli_query($conn, $sql);         // die(mysqli_error($conn)

  if($qry) {
   echo "Data has been inserted.\n";
  } else {
   echo "Something went wrong:\n ".mysqli_error($conn);
  }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>adduser</title>
</head>
<body>
 <form method="post" name="login" enctype="multipart/form-data" action="">

  <label>Username</label>
  <input type="text" name="username">
  <br><br>

  <label>Password</label>
  <input type="password" name="password">
  <br><br>

  <label>Email</label>
  <input type="email" name="email">
  <br><br>
 
  <input type="submit" name="submit" value="Register">          
  <input type="reset" name="submit" value="Cancel">
 </form>
</body>
</html>