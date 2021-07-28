<?php  
include('config.php');
// $con
$qry="SELECT COUNT(ID) as total FROM student_register";
$result=mysqli_query($con,$qry) or die(mysql_error($con));
$tot=mysqli_fetch_array($result)['total'];



$qry="SELECT MAX(ID) as max_num FROM student_register";
$result=mysqli_query($con,$qry) or die(mysql_error($con));
$max_val=mysqli_fetch_array($result)['max_num'];

$qry="SELECT MIN(ID) as min_num FROM student_register";
$result=mysqli_query($con,$qry) or die(mysql_error($con));
$min_val=mysqli_fetch_array($result)['min_num'];


$qry="SELECT SUM(ID) as sum_val FROM student_register";
$result=mysqli_query($con,$qry) or die(mysql_error($con));
$sum_val=mysqli_fetch_array($result)['sum_val'];


$qry="SELECT AVG(ID) as avg_val FROM student_register";
$result=mysqli_query($con,$qry) or die(mysql_error($con));
$avg_val=mysqli_fetch_array($result)['avg_val'];



//  SUM()
// MAX()
//MIN()
// firstname,lastname
// *
//COUNT()
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


<div class="container mt-5">
	<div class="row">
		<?php 
         include('config.php');
//  ID>3
         // age>21
         // marks>50
         // marks<50
         // MAX(marks)
         // MIN(marks)

         $q="SELECT * FROM student_register WHERE ID<=3";

         $res=mysqli_query($con,$q);// array
          // assoc format

         echo "<table class='table table-bordered'>

         <tr class='table-success'>
         	<th>S ID</th>
         	<th>First Name</th>
         	<th>Last Name</th>
         	<th>Gender</th>
         	<th>Date Of Birth</th>
			<th>Mobile Number</th>
			<th>Languages</th>  
			<th>Edit</th>  
			<th>Delete</th> 

		</tr>

         ";


         while($x=mysqli_fetch_array($res)){
			//x x['columnname']
			//  6 times
			// x= we are going to store each row for one time

//  static info   " "
         //  dynamic info = variables  .$variable name or else $x['column nAME.

			echo "<tr class='table-warning'>";

			echo "<td>".$x['ID']."</td>";

			echo "<td>".$x['firstname']."</td>";
			echo "<td>".$x['lastname']."</td>";

			echo "<td>".$x['gender']."</td>";

			echo "<td>".$x['dob']."</td>";

			echo "<td>".$x['mobilenumber']."</td>";

			echo "<td>".$x['languages']."</td>";

			echo "<td><a href='student_edit.php?ID=".$x['ID']."' target='_blank' class='btn btn-info'>Edit</a></td>";

			echo "<td><a href='student_delete.php?ID=".$x['ID']."' target='_blank' class='btn btn-danger'>Delete</a></td>";

			echo "</tr>";
         }
         // while end which means ALL the records inside the table is completed!!

         echo "<tr class='table-danger'>
         <td>Total</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td>".$tot."</td>
         </tr>";

//  total marks of school students
         //  Max Min >35 passed <35 failed

         echo "<tr class='table-danger'>
         <td>MAX ID</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td>".$max_val."</td>
         </tr>";

        echo "<tr class='table-danger'>
         <td>MIN ID</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td>".$min_val."</td>
         </tr>";


          echo "<tr class='table-danger'>
         <td>SUM</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td>".$sum_val."</td>
         </tr>";


           echo "<tr class='table-danger'>
         <td>AVG</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td>".$avg_val."</td>
         </tr>";

      

         echo "</table>";


         
		?>
		
	</div>
	
</div>

</body>
</html>