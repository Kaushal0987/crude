<?php

 $id = $_POST['id'];
 $category=$_POST['category'];
 $description=$_POST['description'];
 $status=$_POST['status'];


 $sql = "UPDATE category SET category='$category', description='$description', status='$status' WHERE id='$id'";

 include('connection.php');

 $qry=mysqli_query($conn, $sql);

 if($qry)
 {
  header("Location:category.php");
 }
 else
 {
  echo "Something wrong";
 }

?>