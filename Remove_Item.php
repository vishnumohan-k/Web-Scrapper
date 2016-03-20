<?php
include 'dbconnect.php';
$url_id = $_GET['Url_id'];
//echo "URL_ID:".$url_id;

$query="delete from URL_history where url_id_hist = '".$url_id."'";
$rslt=mysqli_query($con,$query);
 

$query="delete from Wish_Url where url_id = '".$url_id."'";
$rslt=mysqli_query($con,$query);
   

$query="delete from URL where url_id = '".$url_id."'";
$rslt=mysqli_query($con,$query);
//echo "delete suceesful";
header("Location: Wishlist.php");

?>