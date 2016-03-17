<?php
include ("dbconnect.php");
$url=$_POST['URL'];
$range=$_POST['range'];
$cat=$_POST['catagory'];
echo "existing Wishlist<br>".$url."<br>";
echo $range."<br>";
echo $cat."<br>";
$newCat=$_POST['NewCatagory'];
echo $newCat;
if($newCat)
{
	//echo "New catagory is added";
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
                    //echo $user;
              	$query=mysqli_query($con,"INSERT INTO wishlist(user_id_wishlist,wishlist_name) VALUES ('$user','$newCat')");
              	$query1="select wishlist_id from wishlist where wishlist_name = '".$newCat."'";
              	$rslt=mysqli_query($con,$query1);
              	if(! $rslt ) 
                {
                        die('Could not get data: ' . mysql_error());
                }     
                    
                while($row=mysqli_fetch_row($rslt)) 
                {
                        
                        $wishlist_id=$row[0];
                }  
                //echo "<br>".$wishlist_id;
}

?>