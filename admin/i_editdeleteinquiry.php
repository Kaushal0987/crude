<?php 
 $iid=$_GET['iid'];
 $action=$_GET['action'];
 switch($action){
  case "edit":
  {
   $sql = "SELECT * FROM inquiry WHERE id=$iid";
   include('connection.php');
   $qry=mysqli_query($conn, $sql);
   while($row = mysqli_fetch_array($qry))
   {
    $id=$row['id'];
    $firstname=$row['firstname'];
    $lastname=$row['lastname'];
    $email=$row['email'];
    $dob=$row['dob'];
    $gender=$row['gender'];
    $course=$row['course'];
    $city=$row['city'];
    $message=$row['message'];
    $status=$row['status'];

    echo "<form method=post action=editprocess.php>";
    echo "<input type=hidden name=id value=$id>";
    echo "<input type=text name=firstname value=$firstname><br>";
    echo "<input type=text name=lastname value=$lastname><br>";
    echo "<input type=text name=email value=$email><br>";
    echo "<input type=text name=dob value=$dob><br>";
    echo "<input type=text name=gender value=$gender><br>";
    echo "<input type=text name=course value=$course><br>";
    echo "<input type=text name=city value=$city><br>";
    echo "<input type=text name=message value=$message><br>";
    echo "<input type=text name=status value=$status><br>";

    echo"<input type=submit name=submit value=Edit>";
    echo"</form>";
   }
   break;
  }

  case "delete":
  {
   $sql="DELETE from inquiry WHERE id=$iid ";
   include("connection.php");
   $qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($qry)
   {
    header("Location:inquiry.php");
   }
   break;
  }

  default:
  {
   echo"unable to process the comand";
  }
 }
?>
