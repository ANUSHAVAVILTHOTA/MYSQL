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

// echo $ID;
$d="DELETE FROM session WHERE ID='".$ID."'";
//  one record

$result=mysqli_query($con,$d);

if($result){
	// echo "SUCCESS";
	header("location:session.php");
}

?>
</body>
</html>