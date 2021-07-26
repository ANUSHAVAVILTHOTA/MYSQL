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


<div class="container">
  <div class="row">
    <?php 
   include('config.php');
//  
     $result=mysqli_query($con,"SELECT * FROM semester");
     //  we need to access all the columns from session table


    echo "<table class='table table-bordered'>";
    echo "<tr class='table-success'>";
      echo "<th>ID</th>";
      echo "<th>SEMISTER</th>";
      echo "<th>Reg Date/Creation Date</th>";
      echo "<th>Edit</th>";
      echo "<th>Delete</th>";
    echo "</tr>";


    while($y=mysqli_fetch_array($result)){
      // 6 times
      echo "<tr class='table-warning'>";
      echo "<td>".$y['ID']."</td>";
      echo "<td>".$y['semester']."</td>";
      echo "<td>".$y['creationDate']."</td>";

      echo "<td><a href='semester_edit.php?ID=".$y['ID']."' target='_blank' class='btn btn-info'>Edit</a></td>";


      echo "<td><a href='semester_delete.php?ID=".$y['ID']."' target='_blank' class='btn btn-danger'>Delete</a></td>";


      echo "<tr>";

    }

    echo "</table>";
    ?>
    
  </div>
</div>
<?php  include('footer.php');?>

</body>
</html>