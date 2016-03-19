
<html>
<head>
  <title></title>
<script language="JavaScript" type="text/javascript">
<!--

function Show_div(obj1)
{
 document.getElementById(obj1).style.display="";
}

</script>

</head>

        <body>
        <br><hr>
    <div class="container" >
    <div class="row" >
        <div style="width:100%; margin:0 auto; border: thin solid grey; border-radius: 25px;padding: 20px;">
            <form method="POST" action="">
                 <h2 class="text-center"></h2>
                <br/>
                <?php
                    $url_id = $_GET['Url_id'];
                    //echo "URL_ID:".$url_id;
                    include 'dbconnect.php';
                    $query="select url,title,regx_id_url,current_value from URL where url_id = '".$url_id."'";
                    $rslt=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($rslt))
                    {
                      echo "<div class='form-group' style='text-align:center'>";
                      echo "<label id='dis'><h3 class='text-center'> &nbsp; ".$row['title']."</h3></label>";                    
                      echo "</div>";
                      echo "<div class='form-group' style='text-align:center'>";
                      echo "<label id='dis'><h3 class='text-center'>Current Price:&nbsp;".$row['current_value']."</h3></label>";                    
                      echo "</div>";   
                      $query1="select host from REGX where regx_id = '".$row['regx_id_url']."'"; 
                      $rslt1=mysqli_query($con,$query1);  
                      if(! $rslt1 ) 
                      {
                        die('Could not get data: ' . mysql_error());
                      }   
                      while($row1=mysqli_fetch_row($rslt1)) 
                      {  
                      echo "<div class='form-group' style='text-align:center'>";
                      echo "<label id='dis'><h3 class='text-center'>Website:&nbsp;".$row1[0]."</h3></label>";                                  
                      echo "</div>";
                      }
                    }
                ?>
                             
                <br/>
                <div class="align-center" style="text-align:center">
                    <button type="button" onclick="Show_div('histo')" name="history" class="btn btn-default" id="history" style="font-size: 15px;font-weight: bold;">View History</button>&nbsp;&nbsp;&nbsp;
                    <button type="button" onclick="Show_div('predi')" name="predict" class="btn btn-default" id="predict" style="font-size: 15px;font-weight: bold;">Predict Price</button>&nbsp;&nbsp;&nbsp;
                     <button type="submit" name="Gosite" class="btn btn-default" id="gosite" style="font-size: 15px;font-weight: bold;">Go To Product Page</button>&nbsp;&nbsp;&nbsp;
                     <button type="submit" name="Delete" class="btn btn-default" id="delete" style="font-size: 15px;font-weight: bold;">Delete Product</button>&nbsp;&nbsp;&nbsp;

                </div>
                <div class="form-group has-feedback text-center" id="histo" style="display:none;">
                    
                </div>
                <div class="form-group has-feedback text-center" id="predi" style="display:none;">
                   <input type="date" id="date" placeholder="Enter Date" > 
                   <button type="submit" name="pr" class="btn btn-default" id="pr" style="font-size: 15px;font-weight: bold;">predict price</button>&nbsp;&nbsp;&nbsp;
                </div>

            </form>
        </div>
    </div>
    </div>
    </body>
    </head>
</html>
