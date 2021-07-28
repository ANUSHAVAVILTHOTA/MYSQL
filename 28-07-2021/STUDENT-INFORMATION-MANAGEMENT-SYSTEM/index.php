<?php  

if(isset($_POST['submit'])){
  include('config.php');
   $username=$_POST['username'];
   $password=$_POST['password'];

   $q="SELECT * FROM admin WHERE username='".$username."' AND password='".$password."'";
    // 1 or more than one record===>login main menu page  // username='admin' password='admin123'  =
   // 0 or -ve  redirct him/her into same login page
   // 1
   //3
   //4

   $result=mysqli_query($con,$q);

   $count=mysqli_fetch_array($result);//1or 2 or 0
   if($count>0){
    // mysqli_num_rows()
     header("location:session.php");
   }
   else{
    header("location:index.php");//login page
    //
   }


}

?>
<!DOCTYPE html>
<html>
<head>
	  <?php  include('head.php');?>
</head>
<body>
 

<?php  include('navbar.php'); ?>


<div class="container">
   <form method="post" action="">
       <div class="row">
          <div class="col-md-6 mt-5">
            <label>Enter User Name</label>
            <input type="text" name="username" class="form-control">

            <label>Enter Password</label>
            <input type="password" name="password" class="form-control">

            <hr>

            <button type="submit" name="submit" class="btn btn-primary">LogIN</button>
            
          </div>
         
       </div>
   </form>
</div>


<?php  include('footer.php'); ?>
</body>
</html>