<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
$username=$_SESSION['username'];
$userid=$_SESSION['user_Id'];
?>
<!Doctype html>
<html>
<head>
<title>Home | <?php echo $username; ?> </title>
</head>
<body>
<script>
function move(){
 window.location="upload.php";
}

</script>
welcome <?php echo $username; ?><br>
<button onclick="move()">Upload Video</button><br>
<fieldset><b>Videos</b><br>
<?php
include "db.php";
$sql = "select * from tblaccount as tb join tblpost as tp on tb.user_Id=tp.user_Id";
$re = mysqli_query ($conn, $sql);
while($row = mysqli_fetch_assoc($re)){
echo $row['username']. " ". "Uploaded";
echo "<video width='320' height='240' src='uploads/".$row['video']."' type='video/mp4' controls>";
echo "</video>". "<br>";
echo $row['datetime'];
}
?>
</fieldset>
</body>
</html>