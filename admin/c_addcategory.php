<?php
 if(isset($_POST['submit'])){
  $category = $_POST['category'];
  $descrption = $_POST['description'];
  $role = "user";
  $status = 0;

  include("connection.php");

  $sql = "INSERT INTO category (category, description, status)VALUES('$category', '$descrption', '$status')";

  $qry = mysqli_query($conn,$sql); //or die(mysqli_error($conn));
  if($qry)
  {
   echo "category added";
  }
  else
  {
   echo "something wrong";
  }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>addcategory</title>
</head>
<body>
 <form action="" method="post" enctype="multipart/form-data">
  <label>category</label>
  <input type="text" name="category">
  <br><br>

  <label>description</label>
  <textarea name="description" cols="30" rows="10"></textarea>
  <br><br>

  <input type="submit" name="submit" value="submit">
 </form>
</body>
</html>