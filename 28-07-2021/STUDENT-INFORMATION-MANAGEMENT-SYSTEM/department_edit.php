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

$q="SELECT * FROM department WHERE ID='".$ID."'";

//  only one record
$result=mysqli_query($con,$q);

$data=mysqli_fetch_array($result);

if(isset($_POST['update'])){
	
	$ID=$_GET['ID'];
	$department=$_POST['department'];// new edited info

	$q="UPDATE department set department='".$department."' WHERE ID='".$ID."'";

	$result=mysqli_query($con,$q);

	if($result){
		header("location:department.php");
	}



}

?>
<?php  include('navbar.php');?>
<div class="container">
	<form action="" method="post">
		<div class="form-group">
			<div class="col-md-6 mt-5">
			
				<label>Department</label>
				<input type="text" name="department" class="form-control" value="<?php echo $data['department']; ?>">
				

			<button type="submit" name="update" class="btn btn-primary mt-4">Submit</button>
			</div>
		</div>
	</form>
</div>
<?php  include('footer.php');?>
</body>
</html>