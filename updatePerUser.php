<?php
include 'dbconnect.php';
include 'Url.php';
session_start();
$query="select user_id from user where email = '".$_SESSION['username']."'";
    session_write_close ();    
$rslt=mysqli_query($con,$query);
    if(! $rslt ) 
        {
            die('Could not get data: ' . mysql_error());
        }                 
        while($row=mysqli_fetch_row($rslt)) 
        {             
            $user=$row[0];
        }      
$query="select wishlist_id from wishlist where user_id_wishlist = '".$user."'";
    $rslt=mysqli_query($con,$query);  
    if(! $rslt ) 
        {
            die('Could not get data: ' . mysql_error());
        }     
        while($row=mysqli_fetch_row($rslt)) 
        {
            $query1="select url_id from Wish_Url where wishlist_id = '".$row[0]."'";
            $rslt1=mysqli_query($con,$query1);  
            if(! $rslt1 ) 
            {
                die('Could not get data: ' . mysql_error());
            }            
            while($row1=mysqli_fetch_row($rslt1)) 
            { 
                $url_id_temp = $row1[0];
                $item = new URL();
                $item->update($url_id_temp);           
            }

        }
?>