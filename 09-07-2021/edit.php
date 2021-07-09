<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php
$con=mysqli_connect("localhost","root","","trial");

if($con===false){
	echo "ERROR IN CONNECTION";
}
else{
	echo "SUCCESS";
}
//  when we see the values in url GET
// hide post

$uname=$_GET['firstname']; // Anusha

echo $uname;

// old date where firstname='Anusha'

$q="SELECT * FROM formdata WHERE firstname='".$uname."'";//Anusha //Kp 

$result=mysqli_query($con,$q);

// the row result will be in result variable

$data=mysqli_fetch_array($result);

if(isset($_POST['update'])){
	// new data
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];//new values
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$address=$_POST['address'];


	$k="UPDATE formdata set lastname='".$last_name."', gender='".$gender."',address='".$address."',email='".$email."',firstname='".$first_name."' WHERE firstname='".$uname."'";

	


    $res=mysqli_query($con,$k);

    if($res){
    	echo "UPDATESUCCESS";
    }
    header("location:update.php");
    
}

?>


	<center>
		<!--  action means when we click on submit it will redirect into that page -->
		<form method="post">
			<h3>Edit Your Profile HERE</h3><br><br>

			<label>First NAME</label>
		     <input type="text" name="first_name" value="<?php  echo $data['firstname'] ?>"><br><br>


		     <label>LAST NAME</label>
		     <input type="text" name="last_name" value="<?php  echo $data['lastname'] ?>"><br><br>


		     <label>GENDER</label>
		     <input type="text" name="gender" value="<?php  echo $data['gender'] ?>"><br><br>

		     <label>EMAIL</label>
		     <input type="text" name="email" value="<?php  echo $data['email'] ?>"><br><br>

		     <label>Address</label>
		     <input type="text" name="address" value="<?php  echo $data['address'] ?>"><br><br>

		     <input type="submit" name="update" value="Submit">
<!-- create check boxes & radio buttons dropdowns dates -->

	     </form>
     </center>
</body>
</html>