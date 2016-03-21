<?php
include 'dbconnect.php';
if (($_POST['email']=="admin@gmail.com") && ($_POST['pwd']=="admin")) 
{
   session_start();
   $_SESSION['username']=$_POST['pwd'];
   session_write_close ();
   header("Location:AdminPage.php");
   //echo "string";
   $f=1;
}
else
{
$query="select user_id from user where email = '".$_POST['email']."' AND pwd = '".$_POST['pwd']."'";
$rslt=mysqli_query($con,$query);
   if(! $rslt ) 
   {
      die('Could not get data: ' . mysql_error());
      //header("Location: ToLogin.php");

   } 
   $f=0;
   while($row=mysqli_fetch_row($rslt)) 
   {
            session_start();
            $_SESSION['username']=$_POST['email'];
            //$_SESSION['user_id']=$row[0];
            session_write_close ();
            header("Location: USER.php");
            $f=1;
   }
}  

mysqli_close($con);
if($f==0)
header("Location: ToLogin.php");
?>
