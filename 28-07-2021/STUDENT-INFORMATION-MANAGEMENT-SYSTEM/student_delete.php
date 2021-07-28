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
$del="DELETE FROM student_register WHERE ID='".$ID."'";

if(mysqli_query($con,$del)){
	header("location:student_register.php");
}


?>

</body>
</html>