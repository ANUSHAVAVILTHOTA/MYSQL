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
	<meta charset="utf-8">
	<title>SIMS</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <style type="text/css">
      	.footer{
      		position: fixed;
      		bottom: 0;
      		left: 0;
      		width: 100%;
      		color: white;
      		text-align: center;
      	}
      </style>
</head>
<body>
 
<!--  

1. Button tag class="navbar-toggler" data-toggle="collapse" data-target="#abc"


This is for menu section
class="collapse navbar-collapse" id="abc"


-->

 <div>

 	<nav  class="navbar navbar-expand-md navbar-light bg-primary text-white">
 		

 		<a href="index.php" class="navbar-brand">
 			<img src="img/logo.svg" height="28">
 		</a>


 		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#abc">
 			<span class="navbar-toggler-icon"></span>
 			
 			 this is just an icon with 3 lines
 		</button>


 		<div class="collapse navbar-collapse" id="abc">
 			<div class="navbar-nav">
 				<a href="#" class="nav-item nav-link text-white">SESSION</a>
 				<a href="#" class="nav-item nav-link text-white">DEPARTMENT</a>
 				<a href="#" class="nav-item nav-link text-white">SEMISTER</a>
 			</div>
 		</div>


 	</nav>
 </div>

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

<footer>
	 <div class="footer bg-primary pt-5 pb-5">
	 	<div class="row">
	 		<div class="col-md-12">
	 			 &copy; 2021 Online Student Information System By | Kp
	 		</div>
	 		
	 	</div>
	 </div>
</footer>
</body>
</html>