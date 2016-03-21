
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
        <div style="width:500px; margin:0 auto; border: thin solid grey; border-radius: 25px;padding: 20px;">
            <form method="POST" action="">
                 <u><h2 class="text-center">New Regular Expression</h2></u>
                <br/>
                <div class="form-group has-feedback text-center">
                <input type="text" name="host" style="font-size: 15px;font-weight: bold;" class="form-control" id="host" placeholder="Enter Host Name" autofocus required>
                <i class="glyphicon glyphicon-home form-control-feedback"></i><br>
                </div>
				<div class="form-group has-feedback text-center">
                <input type="text" name="tregx" style="font-size: 15px;font-weight: bold;" class="form-control" id="tregx" placeholder="Enter Regular Expression for Title" autofocus required>
                <i class="glyphicon glyphicon-text-color form-control-feedback"></i><br>
                </div>
                <div class="form-group has-feedback text-center">
                <input type="text" name="pregx" style="font-size: 15px;font-weight: bold;" class="form-control" id="pregx" placeholder="Enter Regular Expression for Price" autofocus required>
                <i class="glyphicon glyphicon-oil form-control-feedback"></i><br>
                </div>

                <div class="form-group has-feedback text-center">
                <input type="text" name="desc" style="font-size: 15px;font-weight: bold;" class="form-control" id="desc" placeholder="Enter Description for regular expression" autofocus required>
                <i class="glyphicon glyphicon-text-background form-control-feedback"></i><br>
                </div>
                <br/>
                <div class="align-center" style="text-align:center">
                    <button type="submit" name="AddRegex" class="btn btn-default" id="Addregx"  style="font-size: 15px;font-weight: bold;">Add New Regex</button>&nbsp;&nbsp;&nbsp;
                    <button type="reset" name="cancel" class="btn btn-default" id="reset" style="font-size: 15px;font-weight: bold;">Cancel</button>
<?php
include ("dbconnect.php");
if(isset($_POST['AddRegex']))
{
$host=$_POST['host'];
//echo $host;
$tregx=$_POST['tregx'];
//echo $tregx;
$pregx=$_POST['pregx'];
//echo $pregx;
$desc=$_POST['desc'];
//echo $desc;
$query=mysqli_query($con,"INSERT INTO REGX(host,title_regx,value_regx,description) VALUES ('$host','$tregx','$pregx','$desc')");
echo $query;    
}             

?>
                </div>
            </form>
        </div>
    </div><!--login form-->
    </div>
    </body>
    </head>
</html>
