<?php
include 'dbconnect.php';
include 'Url.php';
$query="select url_id from URL";
            $rslt=mysqli_query($con,$query);
           while($row=mysqli_fetch_row($rslt)) {
                $url_id = $row[0];
				$item = new URL();
                $item->update($url_id);
                echo $url_id;
                } 
?>