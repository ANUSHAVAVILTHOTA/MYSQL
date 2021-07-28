<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

include('config.php');
$ID=$_GET['ID'];
$del="DELETE FROM semester WHERE ID='".$ID."'";
$result=mysqli_query($con,$del);
if ($result) {

	header('location:semister.php');
	// code...
}

 ?>

</body>
</html>