<?php  

$con=mysqli_connect("localhost","root","","sims");
if($con){
	$sql="SELECT * FROM score";
	$result=mysqli_query($con,$sql);
	//  x axis and y-axis
	$xValues='';
	$yValues='';
	//  record // row
	// 1,2,3,4,5
	// 10,40,20,9,5
	// 1,2,3,4,5,
	//10,40,20,9,5,
	// $x.="'".."', ";
	while($row=mysqli_fetch_array($result)){
		$xValues.="'".$row['playerid']."',";
		$yValues.="'".$row['score']."',";
	}
	// echo $xValues;
	// echo "<br>";
	// echo $yValues;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Line Chart</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>
<canvas id="myChart" style="width: 100%; max-width: 700px;"></canvas>
<script type="text/javascript">
	
	new Chart("myChart",{
		type:"line",
		data:{
			labels:[
			<?php echo $xValues;  ?>
				],
			datasets:[{
				label:"Scores",
				borderColor:"red",
				backgroundColor:"blue",
				data:[
				<?php echo $yValues; ?>
				],
				fill:false
			}
			]

		}

	});
</script>
</body>
</html>