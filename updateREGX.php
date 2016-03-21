<?php
include 'dbconnect.php';

$regx_id = $_POST['regx_id'];
$host = $_POST['host'];
$title = $_POST['title'];
$price = $_POST['price'];
$disc = $_POST['disc'];

$query="UPDATE REGX SET host = '$host' ,title_regx = '$title' ,value_regx = '$price' ,description = '$disc' WHERE  regx_id  =  $regx_id ";
$rslt=mysqli_query($con,$query);
mysqli_close($con);

header("Location: UpdateRegx.php");

?>