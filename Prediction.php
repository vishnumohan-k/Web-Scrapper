<?php
include 'dbconnect.php';

function dayDiffrence($date1,$date2)
	{
		/*echo $date1->format('d-m-Y H:i:s ');
		echo "<br>";
		echo $date2->format('d-m-Y H:i:s ')."<br>";*/
		$interval = $date1->diff($date2);
		$days=$interval->format('%a');
		return $days;
	}


function linear($X,$first,$url_id,$con)
	{
		$N=0;$zx=0.0;$zy=0.0;$zxy=0.0;$zx2=0.0;
		$query="select price,time from URL_history where url_id_hist = ".$url_id." ";
		$rslt=mysqli_query($con,$query);
		while($row=mysqli_fetch_row($rslt))
			{
		    $time1 = $row[1];
		    $Y = $row[0];
		    $N += 1;
		    $zy += $Y;
		    $temptime = datetime::createfromformat('Y-m-d H:i:s',$time1);
		    $tempX = dayDiffrence($first,$temptime);
		    $zx += $tempX;
		    $zx2 +=($tempX * $tempX);
		    $zxy += ($tempX * $Y);
		    //echo $tempX. "  : ".$Y."<br>";
		}	
		//echo $zy." : ".$N ." : ".$zx." : ".$zx2." : ".$zxy;
		$denom = ( ($N * $zx2) - ($zx * $zx) );
		$a= ( $zy * $zx2) - ($zx * $zxy);
		$a = $a/ $denom ;
		//echo "a :".$a;
		$b = ( $N * $zxy) - ($zx * $zy);
		$b = $b /$denom;
		//echo "b : ".$b;
		$x = $a + ($b * $X);
		return $x;
	}

$url_id = $_POST['Url_id'];
$query="select price,time from URL_history where url_id_hist = '".$url_id."' ORDER BY time DESC";
$rslt=mysqli_query($con,$query);
while($row=mysqli_fetch_row($rslt))
{
    $time1 = $row[1];
    $price1 = $row[0];
}
$start = datetime::createfromformat('Y-m-d H:i:s',$time1);
$strDate= $_POST['dat'];
$strDate .=' 00:00:00';

$predict = datetime::createfromformat('d/m/Y H:i:s',$strDate);


$x = dayDiffrence($start,$predict);
$predictedPrice = linear($x,$start,$url_id,$con);


echo $predictedPrice;
?>