<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<?php  include('head.php')?>
</head>
<body>
<?php  

// 
$ID=$_GET['ID'];

// echo $ID;//4//3//5

include('config.php');

$q="SELECT * FROM course WHERE ID='".$ID."'";

//  only one record
$result=mysqli_query($con,$q);

$data=mysqli_fetch_array($result);

if(isset($_POST['update'])){
	
	$ID=$_GET['ID'];
	$courseid=$_POST['courseid'];// new edited info
	$coursename=$_POST['coursename'];

	$q="UPDATE course set courseid='".$courseid."',coursename='".$coursename."' WHERE ID='".$ID."'";

    // echo $q;
	$result=mysqli_query($con,$q);

	if($result){
		header("location:course.php");
	}



}

?>
<?php  include('navbar.php');?>


<div class="container">
	<div class="row">
		<div class="col-md-6 mt-5">
			<center><h1>Edit The Course</h1></center>
			<form method="post" action="">
				<label>Enter Course ID</label>
				<input type="text" name="courseid" class="form-control" value="<?php echo $data['courseid'] ?>">

				<label>Course Name</label>
				<input type="text" name="coursename" class="form-control" value="<?php echo $data['coursename'] ?>">

				<input type="submit" name="update" class="btn btn-info mt-3">
			</form>
		</div>
	</div>
</div>

<?php  include('footer.php');?>
</body>
</html>