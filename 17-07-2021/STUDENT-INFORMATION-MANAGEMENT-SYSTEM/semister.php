<?php  

 if(isset($_POST['insert'])){
    $semister=$_POST['semister'];//
    include('config.php');
   
    $q="INSERT INTO semester(semester) VALUES('".$semister."') ";
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
?>
<!DOCTYPE html>
<html>
<head>
	<?php include('head.php') ?>
</head>
<body>

<?php include('navbar.php'); ?>
<div class="container">
	<form method="post" action="">
		<div class="form-group mt-5">
			<!-- this is just for styles  -->
			<div class="col-md-6">
				<label>SEMISTER</label>
				<input type="text" name="semister" class="form-control">
				<button type="submit" name="insert" class="btn btn-primary mt-5">SUBMIT</button>

			
				
			</div>
			
		</div>
	</form>
</div>

<?php  include('footer.php');?>

</body>
</html>