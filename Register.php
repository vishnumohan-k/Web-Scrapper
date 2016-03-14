<?php
include ("dbconnect.php");
$email=$_POST['user_name'];
$pwd=$_POST['pwd'];
$age=$_POST['age'];
$place=$_POST['place'];
$gender=$_POST['gender'];
session_start();
	$query=mysqli_query($con,"INSERT INTO user(email,pwd,age,pin,gender) VALUES ('$email','$pwd',$age,$place,'$gender')");
	$_SESSION['username']=$email;
	session_write_close ();
header("Location: test.php");
?>