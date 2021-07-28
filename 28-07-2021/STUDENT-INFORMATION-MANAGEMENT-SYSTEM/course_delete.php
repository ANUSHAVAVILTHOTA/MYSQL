<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<!-- 
INSERT 
SELECT
UPDATE
DELETE



 -->
<?php  

include('config.php');

$ID=$_GET['ID'];
$del="DELETE FROM course WHERE ID='".$ID."'";

if(mysqli_query($con,$del)){
	header("location:course.php");
}


?>

</body>
</html>