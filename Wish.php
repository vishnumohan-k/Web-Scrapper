<html>
    <body>
        <br><hr>
    <div class="container"  >
    <div class="row" >
        <div style="width:800px; margin:0 auto; border: thin solid grey; border-radius: 25px;padding: 20px;height:;">
            <form method="POST" action="">
                 <h2 class="text-center">Your WishList</h2>
                <br/>
                <div class="form-group has-feedback text-center">
                <label><h4>Choose Your Catagory</h4></label>
                    <select class="form-control" name="" style="width: 225px;margin-left: 30px;font-size: 16px;display: inline-block; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);font-weight: bold; ">
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
                <div class="form-group has-feedback">
                    
                </div>
                <br/>
                <div class="align-center" style="text-align:center">
                    
                </div>
            </form>
        </div>
    </div><!--login form-->
    </div>
    <br><br><br><br><br>
    </body>
</html>