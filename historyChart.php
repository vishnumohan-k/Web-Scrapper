<!doctype html>
<html>
	<head>
		<title>Line Chart</title>
		<script src="Chart.js"></script>
	</head>
	<body>
		<div style="width:100%">
			<div>
				<canvas id="canvas" height="400" width="1600"></canvas>
			</div>
		</div>


	<script>
		var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
		var lineChartData = {
			<?php
			$url_id = $_GET['Url_id'];
			include 'dbconnect.php';
$query="select price,time from URL_history where url_id_hist = '".$url_id."'";
			$rslt=mysqli_query($con,$query);$f=0;
			echo "
			labels : [";
			while($row=mysqli_fetch_row($rslt)) 
				{     
				if($f==0)
					{
						echo "'".$row[1]."'";
						$f=1;}
				else{
						echo ",'".$row[1]."'";
				}
				}
			echo "],
			datasets : [
				{
					label: 'My First dataset',
					fillColor : 'rgba(151,187,205,0.2)',
					strokeColor : 'rgba(151,187,205,1)',
					pointColor : 'rgba(151,187,205,1)',
					pointStrokeColor : '#fff',
					pointHighlightFill : '#fff',
					pointHighlightStroke : 'rgba(151,187,205,1)',
					data : [";
			$query="select price,time from URL_history where url_id_hist = '".$url_id."'";
			$rslt=mysqli_query($con,$query);$f=0;

			while($row=mysqli_fetch_row($rslt)) 
				{     
				if($f==0)
					{
						echo " ".$row[0]." ";
						$f=1;}
				else{
						echo ",".$row[0]." ";
				}
				}

			//echo "randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()";
			echo "]
				}
			]
		}
	window.onload = function(){
		var ctx = document.getElementById('canvas').getContext('2d');
		window.myLine = new Chart(ctx).Line(lineChartData, {
			responsive: true
		});
	}";
	?>
	</script>
	</body>
</html>