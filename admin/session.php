<?php
session_start();
if(!empty($_SESSION['username']) && !empty($_SESSION['logintime']))
{


}
else
{
 header("Location:../login.php");
}

?>