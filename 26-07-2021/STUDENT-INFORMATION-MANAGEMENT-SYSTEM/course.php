
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


<div class="container mt-3">
  <div class="row">
    <?php 
   include('config.php');
//  
     $result=mysqli_query($con,"SELECT * FROM course");
     //  we need to access all the columns from session table


    echo "<table class='table table-bordered'>";
    echo "<tr class='table-success'>";
      echo "<th>ID</th>";
      echo "<th>Course ID</th>";
      echo "<th>Course Name</th>";
      echo "<th>Reg Date/Creation Date</th>";
      echo "<th>Edit</th>";
      echo "<th>Delete</th>";
    echo "</tr>";


    while($y=mysqli_fetch_array($result)){
      // 6 times
      echo "<tr class='table-warning'>";
      echo "<td>".$y['ID']."</td>";
      echo "<td>".$y['courseid']."</td>";
      echo "<td>".$y['coursename']."</td>";
      echo "<td>".$y['creationDate']."</td>";

      echo "<td><a href='course_edit.php?ID=".$y['ID']."' target='_blank' class='btn btn-info'>Edit</a></td>";


      echo "<td><a href='course_delete.php?ID=".$y['ID']."' target='_blank' class='btn btn-danger'>Delete</a></td>";


      echo "<tr>";

    }

    echo "</table>";
    ?>
    
  </div>
</div>
<?php  include('footer.php'); ?>
</body>
</html>