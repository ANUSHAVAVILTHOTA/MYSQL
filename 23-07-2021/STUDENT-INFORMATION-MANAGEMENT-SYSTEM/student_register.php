<?php  
if(isset($_POST['submit'])){
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$password=$_POST['password'];
	$dob=$_POST['dob'];
	// yellow color should be same as tag names
	// white color is our wish
	$gender=$_POST['gender'];
	$mobilenumber=$_POST['mobilenumber'];

	$Languages=$_POST['Languages'];// english,hindi,Telugu
// str to array explode ['English','Hindi','Telugu']
	$Lang=implode(",", $Languages);// arry to string  English Hindi Telugu

//  varchar 
	include('config.php');
	// firstname	lastname	password	dob	mobilenumber	languages	

	$q="INSERT INTO student_register(firstname,password,lastname,dob,mobilenumber,languages,gender) VALUES('".$first_name."','".$password."','".$last_name."','".$dob."','".$mobilenumber."','".$Lang."','".$gender."')";
	$result=mysqli_query($con,$q);

	if($result){
		echo '<script>';
        echo 'alert("Registration Success")';
		echo '</script>';
	}


}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Register Form</title>
	 <?php  include('head.php');?>
</head>
<body>
<?php  include('navbar.php'); ?>
<div class="container">
	<form method="post" action="">
	<div class="row">
		<!-- 3 6 3 -->
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<center><h4>Student Registration Form</h4></center>
			<label>First Name</label>
			<input type="text" name="first_name" class="form-control">

			<label>Last Name</label>
			<input type="text" name="last_name" class="form-control">

			<label>Password</label>
			<input type="password" name="password" class="form-control">

			<label class="mt-3">Select The Gender</label>
			<input type="radio" name="gender" value="Female" >Female
			<input type="radio" name="gender" value="Male" >Male

            <br><br>
			<label>Date Of Birth</label>
			<input type="date" name="dob" class="form-control">

			<label>Mobile Number</label>
			<input type="text" name="mobilenumber" class="form-control">


			<label class="mt-3">Select Languages</label>
		
			English:<input type="checkbox" name="Languages[]" value="English">
			Hindi:<input type="checkbox" name="Languages[]" value="Hindi">
			Telugu:<input type="checkbox" name="Languages[]" value="Telugu">
			<br><br>
			<center><input type="submit" name="submit" value="Submit" class="btn btn-primary"></center>

		</div>
		<div class="col-md-3">
		</div>

		
	</div>
	</form>
</div>

</body>
</html>