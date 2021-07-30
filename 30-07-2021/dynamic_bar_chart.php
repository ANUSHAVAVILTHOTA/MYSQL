<?php
$con=mysqli_connect("localhost","root","","sims");
if($con){
	$sql="SELECT * FROM score";
	$res=mysqli_query($con,$sql);

	$xValues='';
	$yValues='';
	// 1,2,3,
	while($row=mysqli_fetch_array($res)){
		$xValues.="'".$row['playerid']."',";
		$yValues.="'".$row['score']."',";
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bar Chart</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>
	<!--  hex code | rgb | hsl | entity names | rgba |hsla -->
<canvas id="myChart" style="width:100%;max-width:700px;"></canvas>
<script type="text/javascript">
	new Chart("myChart",{
			type:"bar",
			data:{
				labels:[
				<?php echo $xValues; ?>
				],
				datasets:[{
					label:"Scores",
					backgroundColor:"#9B359E ",
					data:[
					<?php  echo $yValues;?>
					]
				}]

			},
			options:{
				legend:{display:false},
				title:{
					display:true,
					text:"Players and their scores"
				}
			}

	});

</script>
<!-- Numpy,pandas, -->
<!-- Oct =Python Adv Topics
No classes for 2 months -->
</body>
</html>