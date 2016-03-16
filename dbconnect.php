<?php
	$con = mysqli_connect("localhost","root","vishnu");
	mysqli_select_db($con,"Shop") or die(mysqli_error($con));

//echo var_dump(function_exists('mysqli_connect'));
?>

