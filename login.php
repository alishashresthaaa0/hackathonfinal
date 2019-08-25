


<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

	<?php include_once 'header.php'; ?>

 	<div style="padding:50px 0 10px 0;"><h1><center>LOGIN HERE</center></h1></div>

	

<div class="container padding bg-light " style="padding-left: 250px;" >
		<div class="col-md-8">	

 <form method="post" name="myLogin"  action="includes/login-inc.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="user_email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="user_pwd">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

	<div style="padding-bottom: 30px;"></div>


	<h5>Not already A User? Register Here.</h5> 
	<a href="register.php" class="btn btn-primary">Register</a>

	</div>
	</div>

	<div style="padding-bottom: 80px;"></div>

	<?php include_once 'footer.php'; ?>

</html>