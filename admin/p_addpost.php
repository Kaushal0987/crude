<?php
 include("session.php");

 if(isset($_POST['submit'])){
  $category = $_POST['category'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $fimage = $_POST['fimage'];
  $status = 0;

  $user_id = session_id();

  include("connection.php");

  $sql = "INSERT INTO post (category_id, user_id, title, description, fimage, status)VALUES('$category', '$user_id', '$title', '$description', '$fimage', '$status')";
  
  $qry = mysqli_query($conn,$sql);
  if($qry){
   echo "Data Inserted";
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
 <title>addpost</title>
</head>
<body>
 <form action="" method="post" enctype="multupart/form-data">
  <label>Category</label>
  <select name="category">
   <?php
    $sql = "SELECT * FROM category WHERE status=1";

    include("connection.php");
    $qry = mysqli_query($conn,$sql);

    while($row=mysqli_fetch_array($qry)){
     echo "<option value=".row['category'].">".row['category']."</option>";
    }
   ?>
  </select>
  <br><br>

  <label>Title</label>
  <input type="text" name="title">
  <br><br>

  <label>Description</label>
  <textarea name="description" cols="30" rows="10"></textarea>

  <label>Upload Image</label>
  <input type="file" name="Upload" value="upload">
  <br><br>

  <input type="submit" names="submit" value="Add">
 </form>
</body>
</html>