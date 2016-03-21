<select class="target form-control" style="width: 300px;margin-left: 70px;font-size: 15px;font-weight: bold;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); "> 
<option value="0" >select any option</option>
<?php
include 'dbconnect.php';
    $query="select regx_id,host from REGX";
    $rslt=mysqli_query($con,$query);  
        if(! $rslt ) 
        {
            die('Could not get data: ' . mysql_error());
        }  
        while($row=mysqli_fetch_row($rslt)) 
        {
            echo "<option value='".$row[0]."' >".$row[1]."</option>";
        }
?>
</select>