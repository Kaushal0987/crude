<?php
include("session.php");
include("inc_header.php");

echo "<a href='p_addpost.php'>Add New Category<a>";
echo "<br>";

$sql="SELECT * FROM post ORDER BY id DESC";

include("connection.php");

$qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));

$count=mysqli_num_rows($qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>post</title>
</head>

<body>
<h2>We have <?php echo $count;?> Records</h2>

<table border="1px">
 
 <tr>
  <th>ID</th>
  <th>category</th>
  <th>user_id</th>
  <th>Title</th>
  <th>description</th>
  <th>fimage</th>
  <th>status</th>
  <th>Function</th>
 </tr>

 <?php
 while($row=mysqli_fetch_array($qry))
 {
  $iid=$row["id"];
  echo "<tr>";
  echo "<td>".$row["id"]."</td>";
  echo "<td>".$row["category_id"]."</td>";
  echo "<td>".$row["user_id"]."</td>";
  echo "<td>".$row["title"]."</td>";
  echo "<td>".$row["description"]."</td>";
  echo "<td>".$row["fimage"]."</td>";
  echo "<td>".$row["status"]."</td>";
  echo "<td> <a href ='p_editdeletepost.php?iid=$iid&action=edit'>EDIT</a>

  <a href ='p_editdeletepost.php?iid=$iid&action=delete'>DELETE</a>
  </td>";
 }
?>
</table>
</body>
</html>