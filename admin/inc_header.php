<?php

echo "WELCOME, " .$_SESSION['username']. "<br>";
echo "<a href=logout.php>Logout</a>";

echo "<hr>";
echo "<a href='dashboard.php'>Home</a> | ";
echo "<a href='user.php'>Users</a> | ";
echo "<a href='inquiry.php'>Inquiry</a> | ";
echo "<a href='category.php'>Category</a> | ";
echo "<a href='post.php'>Posts</a> | ";
echo "<a href='comment.php'>Comment</a> | ";

echo "<hr>";
?>