<?php  

if(isset($_POST['submit'])){

  // echo "Iside IF";
   include('config.php');
   // echo mysqli_error($con);

   $session=$_POST['session'];

   $r="INSERT INTO session(session) VALUES ('".$session."')";
   echo $r;
   $result=mysqli_query($con,$r);
   if($result){
   	echo '<script>';
    echo 'alert("SESSION CREATED SUCCESSFULLY!!!")';
   	echo '</script>';
   }
   else{
   	echo '<script>';
    echo 'alert("SESSION NOT CREATED!!")';
   	echo '</script>';
   }

}

?>
<!DOCTYPE html>
<html>
<head>
	  <?php  include('head.php');?>
</head>
<body>
 
<!--  

1. Button tag class="navbar-toggler" data-toggle="collapse" data-target="#abc"


This is for menu section
class="collapse navbar-collapse" id="abc"


-->

 

<!--  2009-2010  2019-2020  SESSION -->
<!--  column name datatype(maxval) DEFAULT NULL ===> it will store empty values also
	 column name datatype(maxval) NOT NULL ===> it wont store the empty values
 -->

<!-- 
1.2009-2010
2.2020-2021
3.
4.
y:m:d h:m:s


 -->

 <!-- CREATE TABLE session (
    `session` varchar(200) DEFAULT NULL,
    `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP()
    
 );

ALTER TABLE `session` ADD `ID` INT(11) NOT NULL AUTO_INCREMENT FIRST ,ADD PRIMARY KEY(ID);
 -->
<?php  include('navbar.php'); ?>


<div class="container">
	<form action="" method="post">
		<div class="form-group">
			<div class="col-md-6 mt-5">
			<label>Enter Session Name(2009-2010)</label>
			<input type="text" name="session" class="form-control" placeholder="PLS ENTER THE SESSION">

			<button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
			</div>
		</div>
	</form>
</div>

<div class="container">
  <div class="row">
    <?php 
   include('config.php');
//  
     $result=mysqli_query($con,"SELECT * FROM session");
     //  we need to access all the columns from session table


    echo "<table class='table table-bordered'>";
    echo "<tr class='table-success'>";
      echo "<th>ID</th>";
      echo "<th>Session</th>";
      echo "<th>Reg Date/Creation Date</th>";
      echo "<th>Edit</th>";
      echo "<th>Delete</th>";
    echo "</tr>";


    while($y=mysqli_fetch_array($result)){
      // 6 times
      echo "<tr class='table-warning'>";
      echo "<td>".$y['ID']."</td>";
      echo "<td>".$y['session']."</td>";
      echo "<td>".$y['creationDate']."</td>";

      echo "<td><a href='session_edit.php?ID=".$y['ID']."' target='_blank' class='btn btn-info'>Edit</a></td>";


      echo "<td><a href='session_delete.php?ID=".$y['ID']."' target='_blank' class='btn btn-danger'>Delete</a></td>";


      echo "<tr>";

    }

    echo "</table>";
    ?>
    
  </div>
</div>

<?php  include('footer.php'); ?>
</body>
</html>