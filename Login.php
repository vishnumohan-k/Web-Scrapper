<?php
include 'dbconnect.php';
$query="select user_id from user where email = '".$_POST['email']."' AND pwd = '".$_POST['pwd']."'";
$rslt=mysqli_query($con,$query);
   if(! $rslt ) 
   {
      die('Could not get data: ' . mysql_error());
      //header("Location: ToLogin.php");

   } 
   while($row=mysqli_fetch_row($rslt)) 
   {
	   			session_start();
				$_SESSION['username']=$_POST['email'];
				//$_SESSION['user_id']=$row[0];
				session_write_close ();
            header("Location: UserLogin.php");
	}  
mysqli_close($con);
//header("Location: home.php");
?>
