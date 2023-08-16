<?php
if(isset($_POST['submit'])) {
    $uimage=$_FILES["Upload"]["name"];
    $usize=$_FILES["Upload"]["size"];
    $utype=$_FILES["Upload"]["type"];
    $utmp=$_FILES["Upload"]["tmp_name"];

    $dest="../uploads/".$uimage;

    if(move_uploaded_file($utmp,$dest))
    {
        echo "File uploaded successfully";
    }
    else
    {
        echo "Error in file upload.";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Photo uploading</title>
</head>
<body>
    <form action="" name="Upload" method="post" enctype="multipart/form-data">
        <br>
        <input type="file" name="Upload" value="upload">

    <br><br>

    <input type="submit" name="submit" value="upload">
    <br>
</form>
</body>
</form>
