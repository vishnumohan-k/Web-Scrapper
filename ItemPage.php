
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
        <div style="width:620px; margin:0 auto; border: thin solid grey; border-radius: 25px;padding: 20px;">
            <form method="POST" action="">
                 <h2 class="text-center">Your Product</h2>
                <br/>
                <?php
                    $url_id = $_GET['Url_id'];
                    echo "URL_ID:".$url_id;
                ?>
            <div class="form-group has-feedback text-center">
                <label id="dis"><h4>Product Name:</h4></label>
                </div>
                <div class="form-group has-feedback text-center">
                     <label id="dis"><h4>Product Name:</h4></label>
                </div>
                 <div class="form-group has-feedback text-center">
                     <label id="dis"><h4>Website:</h4></label>
                </div>
                             
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
