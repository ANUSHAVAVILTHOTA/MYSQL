<?php 
//  REQUEST[''] for both get and post methods
if(isset($_POST['submit'])){
	$Department=$_POST['Department'];
	include('config.php');
	//  we can able to use all the variables and functions
	// simply all the code
	$q="INSERT INTO department(department) VALUES('".$Department."') ";
	$res=mysqli_query($con,$q);
	if($res){
		echo "<script>";
		echo 'alert("DATA INSERTED!!!")';
		echo '</script>';
	}
	else{
		echo "<script>";
		echo 'alert("DATA NOT INSERTED!!!")';
		echo '</script>';
	}
}

// 

// CREATE TABLE `department`(
//     `ID` INT(11) NOT NULL AUTO_INCREMENT,
//     `department` varchar(100) DEFAULT NULL,
//     `creationDate` timestamp NULL DEFAULT current_timestamp(),
//     PRIMARY KEY(`ID`)
// );


?>
<!DOCTYPE html>
<html>
<head>
	<?php  include('head.php');?>
</head>
<body>

<!-- 
DEFAULT NULL-we can store empty values
NOT NULL=won't store the empty values
current_timestamp===Y-M-D H:M:s
 -->

<?php  include('navbar.php'); ?>

<div class="container">
	<form method="post" action="">
		<div class="form-group mt-5">
			<div class="col-md-6">
				<label>Department</label>
				<input type="text" name="Department" class="form-control">
				<button type="submit" name="submit" class="btn btn-primary mt-5">Submit</button>
			</div>
		</div>

		
	</form>
	
</div>


<?php  include('footer.php');?>


</body>
</html>