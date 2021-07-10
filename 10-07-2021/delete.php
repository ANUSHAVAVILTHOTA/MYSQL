<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

$con=mysqli_connect("localhost","root","","trial");

$uname=$_GET['firstname'];//KP


// echo $uname;
if($con==false){
	echo "CONNECTION FAILED";
}
else{
	echo "CONNECTION SUCCESS";
}

$q="DELETE FROM formdata WHERE firstname='".$uname."'";//KP
$res=mysqli_query($con,$q);

if($res){
	echo "SUCCESS";
}
header("location:del.php");


?>
</body>
</html>