<?php 
 $iid=$_GET['iid'];
 $action=$_GET['action'];
 switch($action)
 {

  case "edit":
  {
   $sql = "SELECT * FROM category WHERE id=$iid";
   include('connection.php');
   $qry=mysqli_query($conn, $sql);
   while($row = mysqli_fetch_array($qry))
   {
    $id=$row['id'];
    $category=$row['category'];
    $description=$row['description'];
    $status=$row['status'];
  

    echo "<form method=post action=c_editcategoryprocess.php>";
    echo "<input type=hidden name=id value=$id>";
    echo "<input type=text name=category value=$category><br>";
    echo "<input type=text name=description value=$description><br>";
    echo "<input type=text name=status value=$status><br>";
   
    echo"<input type=submit name=Submit value=Edit>";
    echo"</form>";
   }
   break;
  }

  case "delete":
  {
   $sql="DELETE from category WHERE id=$iid ";
   include("connection.php");
   $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($qry)
   {
    header("Location:category.php");
   }
   break;
  }

  default:
  {
   echo"unable to process the command";
  }
 }
    
?>

