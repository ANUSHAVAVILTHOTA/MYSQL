<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

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

$con1=mysqli_connect("localhost","root","","trial2");

// $con==='false' or !$con
if($con===false){
   echo "CONNECTION FAILED";

}
else{
	echo "CONNECTION SUCCESS";
}


$q="SELECT * FROM persons";
$res=mysqli_query($con,$q);
// res

echo "<table class='table  table-bordered table-striped'>

<tr class='table-danger'>
   <th>ID</th>
    <th>FIRST NAME</th>
   <th>Last Name</th>
  
   <th>Address</th>
   <th>Cost</th>
   <th>City</th>
</tr>
";

// PersonID	
// LastName	
// FirstName	
// Address	
// Cost	
// City
while($y=mysqli_fetch_array($res)){// 3 times 
	// each row will store in $y
	// each row 5 columns
	echo "<tr class='table-success' style='color:purple;'>";
// array name ['column name']
    echo "<td>".$y['PersonID']."</td>";
    echo "<td>".$y['FirstName']."</td>";
    echo "<td>".$y['LastName']."</td>";
    
    echo "<td>".$y['Address']."</td>";
    echo "<td>".$y['Cost']."</td>";
    echo "<td>".$y['City']."</td>";
	echo "</tr>";


}
echo "</table>";

$q="SELECT * FROM persons";
$res=mysqli_query($con1,$q);

echo "<table class='table  table-bordered table-striped'>

<tr class='table-danger'>
   <th>ID</th>
    <th>FIRST NAME</th>
   <th>Last Name</th>
  
   <th>Address</th>
   <th>Cost</th>
   <th>City</th>
</tr>
";

// PersonID	
// LastName	
// FirstName	
// Address	
// Cost	
// City
while($y=mysqli_fetch_array($res)){// 3 times 
	// each row will store in $y
	// each row 5 columns
	echo "<tr class='table-success' style='color:purple;'>";
// array name ['column name']
    echo "<td>".$y['PersonID']."</td>";
    echo "<td>".$y['FirstName']."</td>";
    echo "<td>".$y['LastName']."</td>";
    
    echo "<td>".$y['Address']."</td>";
    echo "<td>".$y['Cost']."</td>";
    echo "<td>".$y['City']."</td>";
	echo "</tr>";


}
echo "</table>";

mysqli_close($con);

?>
</div>
</body>
</html>