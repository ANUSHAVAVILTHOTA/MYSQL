
<?php  

if(isset($_POST['submit'])){
	include('config.php');


	$courseid=$_POST['courseid'];
	$coursename=$_POST['coursename'];

	$qry="INSERT INTO course(courseid,coursename) VALUES ('".$courseid."','".$coursename."')";
	$res=mysqli_query($con,$qry);
	if($res){
		echo '<script>';
        echo 'alert("Course Added INTO THE DB!!!!")';
		echo '</script>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php  include('head.php'); ?>
</head>
<body>

<?php  include('navbar.php'); ?>


<div class="container">
	<div class="row">
		<div class="col-md-6 mt-5">
			<center><h1>Register The Course</h1></center>
			<form method="post" action="">
				<label>Enter Course ID</label>
				<input type="text" name="courseid" class="form-control">

				<label>Course Name</label>
				<input type="text" name="coursename" class="form-control">

				<input type="submit" name="submit" class="btn btn-info mt-3">
			</form>
		</div>
	</div>
</div>


<?php  include('footer.php'); ?>
</body>
</html>