<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SELECT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<?php  

$con=mysqli_connect("localhost","root","","trial");

if($con===false){
	echo "CONNECTION FAILED";
}
else{
	echo "Connection SUCCESS";

}
//  we need to display the data 
// LAst Name Desc
$s="SELECT * FROM persons ORDER BY Address DESC";

$result=mysqli_query($con,$s);//table -data

echo "<table class='table table-bordered'>
<tr class='table-warning'>
	<th>Person ID</th>
	<th>Last NAme</th>
	<th>First Name</th>
	<th>Address</th>
	<th>Cost</th>
	<th>City</th>
</tr>
";
while($k=mysqli_fetch_array($result)){//resulted data
   //$k =each record
	echo "<tr class='table-info'>";
  
    echo "<td>".$k['PersonID']."</td>";//bd columns
    echo "<td>".$k['LastName']."</td>";
    echo "<td>".$k['FirstName']."</td>";
    echo "<td>".$k['Address']."</td>";
    echo "<td>".$k['Cost']."</td>";
    echo "<td>".$k['City']."</td>";



	echo "<tr>";
}
echo "</table>";
// SUM(Cost) MAX(Cost)  MIN(Cost)
$g="SELECT SUM(Cost) as total FROM persons";
$res=mysqli_query($con,$g);
$total_val=mysqli_fetch_array($res)['total'];
//60   62-64
// while($f=mysqli_fetch_array($res)){
// 	$f['total'];
// }
echo "Sum Of All Values From The Cost Column = ".$total_val;

echo "<br/>";

$g="SELECT AVG(Cost) as total FROM persons";
$res=mysqli_query($con,$g);
$avg_val=mysqli_fetch_array($res)['total'];


echo "Avg  Of All Values From The Cost Column = ".$avg_val;


echo "<br/>";

$g="SELECT MAX(Cost) as total FROM persons";
$res=mysqli_query($con,$g);
$max_val=mysqli_fetch_array($res)['total'];


echo "MAX Value From The Cost Column = ".$max_val;


echo "<br/>";

// MIN(Cost) as sum 
$g="SELECT MIN(Cost) as total FROM persons";
$res=mysqli_query($con,$g);
$min_val=mysqli_fetch_array($res)['total'];


echo "MIN Value From The Cost Column = ".$min_val;

echo "<br/>";
// columns names should be same
// remaining keywords we can use either capital or Small letters
// $g="select count(Cost) as total from persons";

$g="SELECT COUNT(Cost) as total FROM persons";
$res=mysqli_query($con,$g);
$count_val=mysqli_fetch_array($res)['total'];


echo "Total No of Values In Cost Column = ".$count_val;



?>
</div>
</body>
</html>