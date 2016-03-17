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
	echo "New catagory is added";
}

?>