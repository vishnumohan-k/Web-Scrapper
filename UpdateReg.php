<?php
//echo "Add new regx";
?>
<!--<?php
//include 'AddURL.html';
?>-->
<html>
<head>
  <title></title>
</head>

        <body>
        <br><hr>
    <div class="container" >
    <div class="row" >
    <!--<h3><marquee behavior="scroll" direction="left">Add Product URL from Ebay.in & Amazon.ca</marquee></h3>-->
        <div style="width:500px; margin:0 auto; border: thin solid grey; border-radius: 25px;padding: 20px;">
            <form method="POST" action="">
                 <u><h2 class="text-center">Update Regular Expression</h2></u>
                <br/>
                <div class="form-group has-feedback text-center">
                    <label id="dis"><h4>Choose Your Host Name</h4></label>
                    <select id ="cat" class="form-control" name="catagory" style="width: 300px;margin-left: 70px;font-size: 15px;font-weight: bold;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); ">
                    <option disabled selected value> -- select an option -- </option>
                    <?php
                    include 'dbconnect.php';         
                    $query="select host from REGX";
                    //$query="select wishlist_id,wishlist_name from wishlist where user_id_wishlist = '120053'";
                    $rslt=mysqli_query($con,$query);  
                    if(! $rslt ) 
                    {
                        die('Could not get data: ' . mysql_error());
                    }     
                    
                    while($row=mysqli_fetch_row($rslt)) 
                    {
                        
                        echo "<option value='";
                        //echo $row[0];
                        echo "'>";
                        echo $row[0];
                        echo "</option>";
                    }
                    ?>
                    </select>
                </div>
                <br>
				<div class="form-group has-feedback text-center">
                <input type="text" name="tregx" style="font-size: 15px;font-weight: bold;" class="form-control" id="tregx" placeholder="Enter Regular Expression for Title" autofocus required>
                <i class="glyphicon glyphicon-scissors form-control-feedback"></i><br>
                </div>
                <div class="form-group has-feedback text-center">
                <input type="text" name="pregx" style="font-size: 15px;font-weight: bold;" class="form-control" id="pregx" placeholder="Enter Regular Expression for Price" autofocus required>
                <i class="glyphicon glyphicon-scissors form-control-feedback"></i><br>
                </div>

                <div class="form-group has-feedback text-center">
                <input type="text" name="desc" style="font-size: 15px;font-weight: bold;" class="form-control" id="desc" placeholder="Enter Description for regular expression" autofocus required>
                <i class="glyphicon glyphicon-scissors form-control-feedback"></i><br>
                </div>
                <br/>
                <div class="align-center" style="text-align:center">
                    <button type="submit" name="AddRegex" class="btn btn-default" id="Addregx"  style="font-size: 15px;font-weight: bold;">Update Regex</button>&nbsp;&nbsp;&nbsp;
                    <button type="reset" name="cancel" class="btn btn-default" id="reset" style="font-size: 15px;font-weight: bold;">Cancel</button>
                </div>
            </form>
        </div>
    </div><!--login form-->
    </div>
    </body>
    </head>
</html>
