<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <script src="jquery-1.12.2.js"></script>
  <link rel="stylesheet" type="text/css" media="all" href="tablestyle.css" />
</head>
        <body>
        <br><hr>
    <div class="container" >
    <div class="row" >
        <div style="width:100%; margin:0 auto; border: thin solid grey; border-radius: 25px;padding: 20px;">
          <form method="POST" action="Item.php">
            <div class="form-group has-feedback text-center">
              <label id="dis"><h3>Choose Your WishList :</h3></label>  
              <!--<select class="form-control" name="" style="width: 225px;margin-left: 30px;font-size: 16px;display: inline-block; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);font-weight: bold; ">
              <option disabled selected value> -- select an option -- </option>-->
            
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
                    $query="select wishlist_id,wishlist_name from wishlist where user_id_wishlist = ".$user."";
                    $rslt=mysqli_query($con,$query);  
                    if(! $rslt ) 
                    {
                        die('Could not get data: ' . mysql_error());
                    }     
                    echo "<select class='target form-control' name='' style='width: 225px;margin-left: 30px;font-size: 16px;display: inline-block; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);font-weight: bold; ' autofocus>";
                    echo "<option disabled selected value> -- select an option -- </option>-->";
                    while($row=mysqli_fetch_row($rslt)) 
                    {
                        
                        echo "<option value='";
                        echo $row[0];
                        echo "'>";
                        echo $row[1];
                        echo "</option>";
                    }  
                    echo "</select></div>";
                    echo "<div id='kkk'></div>";
                    echo  "<div id='listes'></div>"
                ?>
<script>
$( "select" )
  .change(function () {
    var str = "file.php?wish_id=";
    $( "select option:selected" ).each(function() {
      str += $( this ).val() + " ";
    });
    $('#listes').load(str).fadeIn('slow');
  })
  .change();
</script>                 
            </div> 
        </div>
    </div>
    </div>
    </body>
    </head>
</html>
