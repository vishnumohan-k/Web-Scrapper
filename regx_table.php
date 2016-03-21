<?php
include 'dbconnect.php';
$regx_id = $_GET['regx_id'];
    $query="select * from REGX where regx_id =".$regx_id." ";
    $rslt=mysqli_query($con,$query);  
        if(! $rslt ) 
        {
            die('Could not get data: ' . mysql_error());
        }  $f=0; 
        while($row=mysqli_fetch_row($rslt)) 
        {
         $f=1;
        echo "<br><b>HOST  </b>";
        echo "<input type='text' name='host' value='".$row[1]."'style='font-size: 15px;font-weight: bold;' class='form-control' id='tregx' autofocus required>";
 

        echo "<br><b>Title Regex </b> ";
        echo "<input type='text' name='title' value='".$row[2]."'style='font-size: 15px;font-weight: bold;' class='form-control' id='tregx' autofocus required>";

        echo "<br><b>Price Regex </b>";
        echo "<input type='text' name='price' value='".$row[3]."'style='font-size: 15px;font-weight: bold;' class='form-control' id='tregx' autofocus required>";
        
        echo "<br><b>Description<b>";
        echo "<input type='text' name='disc' value='".$row[4]."'style='font-size: 15px;font-weight: bold;' class='form-control' id='tregx' autofocus required>";
 

        }
        if($f==1)
        {
        echo "<input type='hidden' name='regx_id' id='hiddenField' value='";
        echo $regx_id."'/>";
        echo "<br><button type='submit' name='dd' class='btn btn-default' id='Addregx'  style='font-size: 15px;font-weight: bold;''>Update Regex</button>&nbsp;&nbsp;&nbsp;";
        echo "<button type='reset' name='cancel' class='btn btn-default' id='reset' style='font-size: 15px;font-weight: bold;''>Cancel</button>";
        }
?>