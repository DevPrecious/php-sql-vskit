<?php

include "db.php";

if(isset($_POST['sub'])){

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$password = md5($password);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$sql = "insert into tbluser (fname, lname, gender) values ('$fname', '$lname', '$gender')";
$result = mysqli_query($conn, $sql);

if($result){

    $a = mysqli_query($conn, "select * from tbluser where fname='$fname'");
    $aa = mysqli_fetch_array($a);
    
    if($a){
         $aaa = $aa['user_Id'];
         $sql = "insert into tblaccount (username, password, user_Id) values ('$username', '$password', '$aaa')";
         $tt = mysqli_query($conn, $sql);
         
         if($tt==true){
         echo "<script>";
         echo "alert('you can now log in')";
         echo " </script>";
         header('location:login.php');
         }
       }
     }
  }



