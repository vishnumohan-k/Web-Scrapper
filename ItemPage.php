
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
            <form method="POST" action="Prediction.php">
            <h3><b><a href="Wishlist.php" class="button" style="margin-left:900px" >Back To Wishlist</a></b></h3>
              <div class="form-group has-feedback text-center" style="color: #800000">
                    <label id="dis"><h1><u>Product Details</u></h1></label>   
            </div> 
                 <h2 class="text-center"></h2>
                <?php
                    $url_id = $_GET['Url_id'];
                    echo "<input type='hidden' name='Url_id' id='hiddenField' value='";
                    echo $url_id."'/>";
                    include 'dbconnect.php';
                    $query="select url,title,regx_id_url,current_value from URL where url_id = '".$url_id."'";
                    $rslt=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($rslt))
                    {
                      echo "<div class='form-group' style='text-align:center'>";
                      echo "<label id='dis'><h3 class='text-center'> &nbsp;<b> ".$row['title']."</h3></label>";                    
                      echo "</div>";
                      echo "<div class='form-group' style='text-align:center'>";
                      echo "<label id='dis'><h3 class='text-center'>Current Price:&nbsp;<b>".$row['current_value']."</h3></label>";
                      $url=$row['url'];                   
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
                      echo "<label id='dis' ><h3 class='text-center'>Website:&nbsp;<b>".$row1[0]."</h3></label>";                                  
                      echo "</div>";
                      }
                    }
                    

                ?>
                 <?php echo "<h4><center><b><a href='"; echo $url;    echo "'class='button'>Go to Product page</a>&nbsp;&nbsp;&nbsp;";?>            
                <br/><br/>
                <div class="align-center" style="text-align:center">
                <?php
                    //echo $url;

                    echo "<button type='button' onclick='location.href =&#039";
                    echo "History_Page.php?Url_id=";
                    echo $url_id;
                    echo "&#039";
                    echo "'";
                    echo "class='btn btn-default' style='font-size: 15px;font-weight: bold;' autofocus";
                    echo ">";
                    echo "View History";
                    echo "</button>&nbsp;&nbsp;&nbsp;";  

                ?>
                    <button type="button" onclick="Show_div('predi')" name="predict" class="btn btn-default" id="predict" style="font-size: 15px;font-weight: bold;">Predict Price</button>&nbsp;&nbsp;&nbsp;
                   
                  <?php
                     // echo "<a href='"; echo $url;    echo "'class='button'>Go to Product page</a>&nbsp;&nbsp;&nbsp;";
                      /*echo "<button type='button' onclick='location.href=&#039";
                      echo $url;
                      echo "&#039'";
                      echo "name='Gosite' class='btn btn-default' id='gosite' style='font-size: 15px;font-weight: bold;'>";
                      echo "Go To Product Site";
                      echo "</button>&nbsp;&nbsp;&nbsp;";*/

                      echo "<button type='button' onclick='location.href=&#039";
                      echo "Remove_Item.php?Url_id=";
                      echo $url_id;
                      echo "&#039";
                      echo "'";
                      echo "class='btn btn-default' style='font-size: 15px;font-weight: bold;' autofocus";
                      echo ">";
                      echo "Delete Product";
                      echo "</button>&nbsp;&nbsp;&nbsp;";  

                  ?>

                </div>
                <div class="form-group has-feedback text-center" id="histo" style="display:;">
                    
                </div>
                <div class="form-group has-feedback text-center" id="predi" style="display:none;">
                <?php
                    echo "<br><input type='date' name='dat' id='dat' placeholder='Enter Date(dd/mm/yyyy)' value=''>&nbsp;&nbsp;";
                    echo "<input type='submit' name='pr' class='btn btn-default' id='pr' style='font-size: 15px;font-weight: bold;' value='Predict'>";
                    //echo "&nbsp;&nbsp;&nbsp";
                  ?>
                </div>
                
            </form>
        </div>
    </div>
    </div>
    </body>
    </head>
</html>