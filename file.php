<?php
$sel = $_GET['wish_id'];
include 'dbconnect.php';
//echo "selected file is".$sel;
echo"<table border='1' align='center' width='100%'>
      	<tr>
		<th><center>Product Name</center></th>
        <th><center>Price</center></th>
    	<th><center>URL</center></th></tr>";
        
                        $query1="select url_id from Wish_Url where wishlist_id = '".$sel."'";
                        $rslt1=mysqli_query($con,$query1);  
                        if(! $rslt1 ) 
                        {
                            die('Could not get data: ' . mysql_error());
                        }     
                   
                        while($row1=mysqli_fetch_row($rslt1)) 
                        { 
                            $query2="select url,title,current_value from URL where url_id = '".$row1[0]."'";
                            $rslt2=mysqli_query($con,$query2);
                            while($row2=mysqli_fetch_array($rslt2))
                            {
                                                                     
                                echo"<tr>";
                                //echo"<td><a href='";echo "Item.php?Url_id=";echo "'>"."<b>".$row2['title']."</b>"."</a></td>";
                                echo"<td><a href='";echo "Item.php?Url_id=";echo $row1[0];echo "'>"."<b>".$row2['title']."</b>"."</a></td>";
                                echo"<td>".$row2['current_value']."</td>";
                                echo"<td><a href='";echo $row2['url'];echo "'>"."<i>Go To Page</i>"."</a></td>";
                                echo "</tr>";
                            }            
                        }
                        echo "</table>";

?>