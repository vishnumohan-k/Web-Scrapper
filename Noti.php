<html>
<head>
  <title></title>

</head>

        <body>
        <br><hr>
    <div class="container" >
    <div class="row" >
        <div style="width:1000px; margin:0 auto; border: thin solid grey; border-radius: 25px;padding: 20px;">
          <form method="POST" action="">
                 
            </form>
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
                    echo "user id:".$user;      
                    $query="select wishlist_id from wishlist where user_id_wishlist = '".$user."'";
                    $rslt=mysqli_query($con,$query);  
                    if(! $rslt ) 
                    {
                        die('Could not get data: ' . mysql_error());
                    }     
                    echo "<br>wishlist ids are:<br>";
                    while($row=mysqli_fetch_row($rslt)) 
                    {
                        
                        echo $row[0]."<br>";
                    }
                    $query="select url_id from Wish_Url where wishlist_id = '".$row[0]."'";
                    $rslt=mysqli_query($con,$query);  
                    if(! $rslt ) 
                    {
                        die('Could not get data: ' . mysql_error());
                    }     
                   
                    while($row1=mysqli_fetch_row($rslt)) 
                    {
                        
                        echo $row1[0]."<br>";
                    }
                    //echo $row[0];
            ?>
        </div>
    </div><!--login form-->
    </div>
    </body>
    </head>
</html>
