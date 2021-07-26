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

$q="SELECT * FROM semester WHERE ID='".$ID."'";

//  only one record
$result=mysqli_query($con,$q);

$data=mysqli_fetch_array($result);

if(isset($_POST['update'])){
	
	$ID=$_GET['ID'];
	$semester=$_POST['semister'];// new edited info

	$q="UPDATE semester set semester='".$semester."' WHERE ID='".$ID."'";

    // echo $q;
	$result=mysqli_query($con,$q);

	if($result){
		header("location:semister.php");
	}



}

?>
<?php  include('navbar.php');?>

<div class="container">
	<form method="post" action="">
		<div class="form-group mt-5">
			<!-- this is just for styles  -->
			<div class="col-md-6">
				<label>SEMISTER</label>
				<input type="text" name="semister" class="form-control" value="<?php echo $data['semester'];  ?>">
				<button type="submit" name="update" class="btn btn-primary mt-5">SUBMIT</button>

			
				
			</div>
			
		</div>
	</form>
</div>


<?php  include('footer.php');?>
</body>
</html>