<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Form</title>
</head>
<body>
	<center>
		<!--  action means when we click on submit it will redirect into that page -->
		<form method="post" action="add.php">
			<h3>Register HERE</h3><br><br>

			<label>First NAME</label>
		     <input type="text" name="first_name"><br><br>


		     <label>LAST NAME</label>
		     <input type="text" name="last_name"><br><br>


		     <label>GENDER</label>
		     <input type="text" name="gender"><br><br>

		     <label>EMAIL</label>
		     <input type="text" name="email"><br><br>

		     <label>Address</label>
		     <input type="text" name="address"><br><br>

		     <input type="submit" name="insert" value="Submit">
<!-- create check boxes & radio buttons dropdowns dates -->

	     </form>
     </center>
</body>
</html>