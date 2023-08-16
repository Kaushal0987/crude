<?php
$host="localhost";
$u="root";
$p="";
$db="kaushal";
$conn=mysqli_connect($host, $u, $p, $db);
if(!$conn){echo "Unable to connect to database";}
?>