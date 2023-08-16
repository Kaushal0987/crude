<?php
include("session.php");
include("inc_header.php");

$sql="SELECT * FROM user ORDER BY id DESC";
include("connection.php");
$qry=mysqli_query($conn,$sql) or die(mysqli_error($conn));
$count=mysqli_num_rows($qry);


?>
