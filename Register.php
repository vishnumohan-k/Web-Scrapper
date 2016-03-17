<?php
include ("dbconnect.php");
$name=$_POST['name'];
$email=$_POST['user_name'];
$age=$_POST['age'];
$pwd=$_POST['pwd'];
$repwd=$_POST['repwd'];
if($pwd==$repwd)
{
	session_start();
	$query=mysqli_query($con,"INSERT INTO user(name,email,age,pwd) VALUES ('$name','$email','$age','$pwd')");
	$_SESSION['username']=$email;
	session_write_close ();
	header("Location: USER.php");
}
else
echo "Password mismatch";
?>