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
<body bgcolor="orange">

<div class="container">
<!--  INSERT ,DISPLAY, EDIT ,DELETE =CURD-->

<?php 
// create the con variable
$con=mysqli_connect("localhost","root","","trial");
// $con==='false' or !$con
if($con===false){
   echo "CONNECTION FAILED";

}
else{
	echo "CONNECTION SUCCESS";
}

//  conn var
//  query variable


$g="SELECT * FROM formdata"; // access the columns from the table
//  con variable  query variable
$result=mysqli_query($con,$g);// form data table will be stored 
// total 3 rows 
//  to access mysqli resulted data ====>$result
//  table headings
echo "<table class='table table-bordered table-striped'>

<tr class='table-warning'>
			<th>First Name</th>
			<th>Last Name</th>

			<th>Gender</th>

			<th>Address</th>
			<th> Email</th>
			<th>Edit</th>
			<th>Delete</th>

</tr>

";

while($x=mysqli_fetch_array($result)){


	//  $x will store each record
	echo "<tr class='table-info'>";

     echo "<td>".$x['firstname']."</td>";

     echo "<td>".$x['lastname']."</td>";

     echo "<td>".$x['gender']."</td>";

     echo "<td>".$x['address']."</td>";

     echo "<td>".$x['email']."</td>";

     echo "<td><a href='edit.php?firstname=".$x['firstname']."' target='_blank'>Edit</a></td>";

      echo "<td><a href='delete.php?firstname=".$x['firstname']."' target='_blank'>Delete</a></td>";

	echo "</tr>";

}//ended = 3 records






?>
</div>
</body>
</html>