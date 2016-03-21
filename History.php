<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" media="all" href="tablestyle.css" />
</head>
        <body>
        <br><hr>
    <div class="container" >
    <div class="row" >
        <div style="width:75%; margin:0 auto; border: thin solid grey; border-radius: 25px;padding: 20px;">
          <form method="POST" action="">
             
            </form>
<?php
$url_id = $_GET['Url_id'];
echo "<h4><b><a href='Item.php?Url_id=";
echo $url_id;
echo "'class='button' style='margin-left:600px' >";
echo "Back To Product Page";
echo "</a></b></h4>";
//echo "URL_ID:".$url_id;
include 'dbconnect.php';
echo"<table border='1' align='center' width='100%'>
                                <tr>
                                <th><center>Date</center></th>
                                <th><center>Price</center></th>
                   				</tr>";
$query="select title from URL where url_id = '".$url_id."'";
$rslt=mysqli_query($con,$query);
if(! $rslt ) 
{
    die('Could not get data: ' . mysql_error());
}     
                    
while($row=mysqli_fetch_row($rslt)) 
{
                        
 $title=$row[0];
}      
echo "<div class='form-group' style='text-align:center'>";
                      echo "<label id='dis'><h3 class='text-center'> &nbsp;<b> ".$title."</h3></label>"; 

$query="select price,time from URL_history where url_id_hist = '".$url_id."' ORDER BY time DESC";
$rslt=mysqli_query($con,$query);
while($row=mysqli_fetch_array($rslt))
{
								echo"<tr>";
                                echo"<td><b><center>".$row['time']."</td>";
                                echo"<td><b><center>".$row['price']."</td>";
                                echo "</tr>";      
}
echo "</table>";

?>
</div>
</div>
</div>
</body>
</html>