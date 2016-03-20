<?php

$url_id = $_GET['Url_id'];
echo "URL_ID:".$url_id;
include 'dbconnect.php';
/*$query="delete from URL_history where url_id_hist = '".$url_id."'";
$rslt=mysqli_query($con,$query);
if(! $rslt ) 
{
    die('Could not get data: ' . mysql_error());
}     
                    
while($row=mysqli_fetch_row($rslt)) 
{}  

$query="delete from Wish_URL where url_id = '".$url_id."'";
$rslt=mysqli_query($con,$query);
if(! $rslt ) 
{
    die('Could not get data: ' . mysql_error());
}     
                    
while($row=mysqli_fetch_row($rslt)) 
{}    

$query="delete from URL where url_id = '".$url_id."'";
$rslt=mysqli_query($con,$query);
if(! $rslt ) 
{
    die('Could not get data: ' . mysql_error());
}     
                    
while($row=mysqli_fetch_row($rslt)) 
{}    

header("Location: Wishlist.php");
*/
?>