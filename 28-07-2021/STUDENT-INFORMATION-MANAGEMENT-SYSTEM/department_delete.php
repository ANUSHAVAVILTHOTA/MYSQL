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
$del="DELETE FROM department WHERE ID='".$ID."'";
//  we have one record
if(mysqli_query($con,$del)){
	header("location:department.php");
}

?>
</body>
</html>