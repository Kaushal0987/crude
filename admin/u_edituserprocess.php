<?php

 $id = $_POST['id'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $email=$_POST['email'];
 $role=$_POST['role'];
 $status=$_POST['Status'];


 $sql = "UPDATE user SET username='$username', password='$password', email='$email', role='$role', status='$status'WHERE id='$id'";

 include('connection.php');

 $qry=mysqli_query($conn, $sql);

 if($qry)
 {
  header("Location:user.php");
 }
 else
 {
  echo "Something wrong";
 }

?>