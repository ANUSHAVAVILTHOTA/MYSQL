<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insert INTO TABLE</title>
</head>
<body>

    <center>
    	<?php  
      
       //server name=localhost  constant for xampp
    	// username =root
    	//password =''
    	// database name=trial

//  it will connect php page to myadmin trial db
    	// same "localhost","root","",
         $conn=mysqli_connect("localhost","root","","trial");

         if($conn===false){
         	echo "MYSQL ERROR.COULDNOT CONNECT";
         }
         else{
         	echo "Connection is Success";
         }

          if(isset($_POST['insert'])){
          	// whether user clicks submit button or not
          	// $_GET[''] =we can able to see the values in url
          	$first_name=$_POST['first_name']; //
          	$last_name=$_POST['last_name'];
          	$gender=$_POST['gender'];
          	$address=$_POST['address'];
          	$email=$_POST['email'];
// must and should same as table column names
          	$qry="INSERT INTO `formdata` (`firstname`,`lastname`,`gender`,`address`,`email`) VALUES ('".$first_name."','".$last_name."','".$gender."','".$address."','".$email."') ";
//  to execute this query we nedd to pass 2 params
          	// connection variable ==conn ,query variable $qry
          	if(mysqli_query($conn,$qry)){
          		echo "SUCCESS.DATA IS INSERTED";
          	}
          	else{
          		echo "INSERTION FAILED";// it will return the error
          	}


          }


    	?>
<!-- creating table and database in admin page -->
<!-- MYADMIN we can create database by clicking new on the top left =>database name

we can able to create the table by choosing no of columns

then column name,dadatype,max length -->


Trail =persons 
Trial2 Database



    </center>
</body>
</html>