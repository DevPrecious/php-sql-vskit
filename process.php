<?php
include "db.php";

if(isset($_POST['upload'])){
$user = mysqli_real_escape_string($conn, $_POST['user']);
$title = mysqli_real_escape_string ($conn, $_POST['title']);
$datetime = date("Y-m-d h:i:sa");
$vidfile = $_FILES['video']['name'];
// get the video extension
$extension = substr($vidfile,strlen($vidfile)-4,strlen($vidfile));
// allowed extensions
$allowed_extensions = array(".mp4",".MP4");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only mp4 format allowed');</script>";
}
else
{
//rename the video file
$vidnewfile=md5($vidfile).$extension;
// Code for move video nto directory
move_uploaded_file($_FILES["video"]["tmp_name"],"uploads/".$vidnewfile);
// Query for insertion data into database

$sql = "insert into tblpost (title, video, datetime, user_Id) values ('$title', '$vidnewfile', '$datetime',  '$user')";
$dn = mysqli_query($conn, $sql);
if($dn == true){
echo '<script>';
echo 'alert("Video Uploaded")';
echo '</script>';
header('location:index.php');
}
}
}

