<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<?php  include('head.php');?>
</head>
<body>

<?php 

$ID=$_GET['ID'];
// echo $ID;

include('config.php');

$q="SELECT * FROM student_register WHERE ID='".$ID."'";

$result=mysqli_query($con,$q);
$data=mysqli_fetch_array($result);


if(isset($_POST['update'])){
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$mobilenumber=$_POST['mobilenumber'];
	$Languages=$_POST['Languages'];//['English',Hindi,Telugu]
	$Lang=implode(',', $Languages);// English,Hindi,Telugu
//  order can be different
	// pass firstname last
	// but spell should be correct like in db columns
	$qry="UPDATE student_register set firstname='".$first_name."',lastname='".$last_name."',password='".$password."',gender='".$gender."',dob='".$dob."',mobilenumber='".$mobilenumber."',languages='".$Lang."' WHERE ID='".$_GET['ID']."'";

	$res=mysqli_query($con,$qry);
	if($res){
		header("location:student_register.php");
	}


}
?>
</body>

<?php   include('navbar.php');?>
<div class="container">
	<form method="post" action="">
	<div class="row">
		<!-- 3 6 3 -->
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<center><h4>Edit Student Registration Form</h4></center>
			<label>First Name</label>
			<input type="text" name="first_name" class="form-control" value="<?php echo $data['firstname'] ?>">

			<label>Last Name</label>
			<input type="text" name="last_name" class="form-control" value="<?php echo $data['lastname'] ?>">

			<label>Password</label>
			<input type="password" name="password" class="form-control" value="<?php echo $data['password'] ?>">

			<label class="mt-3">Select The Gender</label>
			<input type="radio" name="gender" value="Female" >Female
			<input type="radio" name="gender" value="Male" >Male

            <br><br>
			<label>Date Of Birth</label>
			<input type="date" name="dob" class="form-control" value="<?php echo $data['dob'] ?>">

			<label>Mobile Number</label>
			<input type="text" name="mobilenumber" class="form-control" value="<?php  echo $data['mobilenumber']?>">


			<label class="mt-3">Select Languages</label>
		
			English:<input type="checkbox" name="Languages[]" value="English">
			Hindi:<input type="checkbox" name="Languages[]" value="Hindi">
			Telugu:<input type="checkbox" name="Languages[]" value="Telugu">
			<br><br>
			<center><input type="submit" name="update" value="Submit" class="btn btn-primary"></center>

		</div>
		<div class="col-md-3">
		</div>

    
		
	</div>
	</form>


</div>

</html>