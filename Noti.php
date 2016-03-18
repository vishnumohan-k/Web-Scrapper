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
            <div class="form-group has-feedback text-center">
                    <label id="dis"><h1>Notifications</h1></label>   
            </div>  
            </form>
            <?php
                    echo"<table border='1' align='center' width='800px'>
                                <tr>
                                <th><center>Product Name</center></th>
                                <th><center>Price</center></th>
                                <th><center>URL</center></th></tr>";
                                
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
                   // echo "user id:".$user;      
                    $query="select wishlist_id from wishlist where user_id_wishlist = '".$user."'";
                    $rslt=mysqli_query($con,$query);  
                    if(! $rslt ) 
                    {
                        die('Could not get data: ' . mysql_error());
                    }     
                    //echo "<br>wishlist ids are:<br>";
                    while($row=mysqli_fetch_row($rslt)) 
                    {
                        $query1="select url_id from Wish_Url where wishlist_id = '".$row[0]."'";
                        $rslt1=mysqli_query($con,$query1);  
                        if(! $rslt1 ) 
                        {
                            die('Could not get data: ' . mysql_error());
                        }     
                   
                        while($row1=mysqli_fetch_row($rslt1)) 
                        { 
                            //echo $row1[0]."<br>";
                            $query1="select url_id from Wish_Url where wishlist_id = '".$row[0]."'";
                            $rslt1=mysqli_query($con,$query1);  
                            if(! $rslt1 ) 
                            {
                                die('Could not get data: ' . mysql_error());
                            }     
                                /*echo"<table border='1' align='center' width='800px'>
                                <tr>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>URL</th></tr>";
                                echo "</table>";*/
                            while($row1=mysqli_fetch_row($rslt1)) 
                            { 
                                //echo $row1[0]."<br>";
                                $query2="select url,title,current_value from URL where url_id = '".$row1[0]."'";
                                $rslt2=mysqli_query($con,$query2);

                                while($row2=mysqli_fetch_array($rslt2))
                                {
                                    //echo $row2['url'];
                                    
                                    echo"<tr>";
                                    echo"<td>".$row2['title']."</td>";
                                    echo"<td>".$row2['current_value']."</td>";
                                    echo"<td><a href='";echo $row2['url'];echo "'>."."GoToPage"."</a></td>";
                                    echo "</tr>";
                                }
                                
                                
                            }

                        }

                    }
                    //echo $row[0];
                    echo "</table>";
            ?>
        </div>
    </div><!--login form-->
    </div>
    </body>
    </head>
</html>
