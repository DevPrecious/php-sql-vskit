<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
$username = $_SESSION['username'];
$userid = $_SESSION['user_Id'];
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<form action="process.php" method="POST" enctype="multipart/form-data">
<input type="hidden" value= <?php echo $userid; ?> name="user"/>
<input type="text" name="title" placeholder="Write about the video" required />
<br>
<input type="file" name="video" required />
<br>
<input type="submit" name="upload" value="Upload"/>
</form>
</body>
</html>