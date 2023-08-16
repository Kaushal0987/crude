<?php
session_start();
if(isset($_POST['submit'])) {

 $user=$_POST['username'];
 $pass = md5($_POST['password']);

 //cookie
 if(isset($_POST['remember']))
 {
  $rem=$_POST['remember'];
 }

 $sql = "SELECT * FROM user WHERE username='$user' AND password='$pass' and status=1";

 include("connection.php");

 $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));

 $count=mysqli_num_rows($qry);

 if ($count== 1){
  $_SESSION['username'] = $user;
  $_SESSION['logintime']=date("ymdhisa");
  

   setcookie("username", $user, time() + (60*60*24*15), "/");
   setcookie("password", $_POST['password'], time() + (60*60*24*15), "/");
  header("Location:admin/dashboard.php");
 }
 else{
  echo "Something wrong";
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login</title>
</head>
<body>
 <form method="POST" action="" enctype="multipart/form-data" name="login">
  <fieldset>

   <legend>User Login</legend>
   <input type="text" name="username" placeholder="Username" value=<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'] ; } ?> required> 
   <br>

   <input type="password" name="password" placeholder="Password" value=<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'] ; } ?>   required>
   <br>

   <input type="checkbox" name="remember" value="remember" > Remeber Me<br>

   <input type="submit" name="submit" value="Login">
   
   <p>Don't have an account <a href="register.php">Register</a></p>

  </fieldset>
 </form>
    
</body>
</html>