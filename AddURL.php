<!--<?php
//include 'AddURL.html';
?>-->
<html>
<head>
  <title></title>
<script language="JavaScript" type="text/javascript">
<!--

function Show_txtbox(obj1,obj2)
{
 document.getElementById(obj1).required="true";
 document.getElementById(obj1).style.display="";
 document.getElementById(obj2).style.display="none";
 document.getElementById("dis").style.display="none";
 document.getElementById("link").style.display="none";
 
}


</script>

</head>

        <body>
        <br><hr>
    <div class="container" >
    <div class="row" >
    <!--<h3><marquee behavior="scroll" direction="left">Add Product URL from Ebay.in & Amazon.ca</marquee></h3>-->
        <div style="width:500px; margin:0 auto; border: thin solid grey; border-radius: 25px;padding: 20px;">
            <form method="POST" action="UrlPost.php">
                 <h2 class="text-center">Add Your Product</h2>
                <br/>
                <div class="form-group has-feedback text-center">
                <input type="url" name="URL" style="font-size: 15px;font-weight: bold;" class="form-control" id="url" placeholder="Copy & Paste Your URL here.." autofocus required>
                <i class="glyphicon glyphicon-scissors form-control-feedback"></i><br>
                </div>
                <div class="form-group has-feedback text-center">
                    <input type="number" name="range" style="font-size: 15px;font-weight: bold;" class="form-control" id="range" placeholder="Enter Your Price Range" required>
                    <i class="glyphicon glyphicon-euro form-control-feedback"></i>
                </div>
                <div class="form-group has-feedback text-center">
                    <label id="dis"><h4>Choose Your Catagory</h4></label>
                    <select id ="cat" class="form-control" name="catagory" style="width: 300px;margin-left: 70px;font-size: 15px;font-weight: bold;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); ">
                    <option disabled selected value> -- select an option -- </option>
                    <?php
                    include 'dbconnect.php';
                    session_start();
                    $query="select user_id from user where email = '".$_SESSION['username']."'";
                    session_write_close ();    
                    $rslt=mysqli_query($con,$query);
                    if(! $rslt ) 
                    {
                        die('Could not get data: ' . mysql_error());
                    }     
                    
                    while($row=mysqli_fetch_row($rslt)) 
                    {
                        
                        $user=$row[0];
                    }          
                    $query="select wishlist_id,wishlist_name from wishlist where user_id_wishlist = ".$user."";
                    $rslt=mysqli_query($con,$query);  
                    if(! $rslt ) 
                    {
                        die('Could not get data: ' . mysql_error());
                    }     
                    
                    while($row=mysqli_fetch_row($rslt)) 
                    {
                        
                        echo "<option value='";
                        echo $row[0];
                        echo "'>";
                        echo $row[1];
                        echo "</option>";
                    }
                    ?>
                    </select>
                </div>
                <div class="form-group has-feedback text-center"> 
                <a href="#" style="margin-left: 200px" id="link" onclick="javascript:Show_txtbox('AddCatagory','cat');"><i class="glyphicon glyphicon-plus-sign"></i> Add New</a>
                    <br><input type="text" name="NewCatagory" style="display: none;font-size:15px;font-weight: bold;"  id="AddCatagory" class="form-control"  placeholder="New Catagory Name"  >
                    </input>
                </div>
                <br/>
                <div class="align-center" style="text-align:center">
                    <button type="submit" name="register" class="btn btn-default" id="login"  style="font-size: 15px;font-weight: bold;">Add to WishList</button>&nbsp;&nbsp;&nbsp;
                    <button type="reset" name="cancel" class="btn btn-default" id="reset" style="font-size: 15px;font-weight: bold;">Cancel</button>
                </div>
            </form>
        </div>
    </div><!--login form-->
    </div>
    </body>
    </head>
</html>
