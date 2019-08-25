<?php 
	session_start();

	$useremail=$_SESSION['u_email'];



	include_once 'includes/dbh-inc.php';

	if(isset($_GET['insertid']))
	{
		include_once 'includes/dbh-inc.php';

		$id=$_GET['insertid'];

		$sql="SELECT * FROM insertquestion WHERE id=$id";
	$result=mysqli_query($conn, $sql);
	$row= mysqli_fetch_assoc($result);
		$email=$row['email'];
		$question=$row['questiontitle'];
	}

 ?>
		

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<body>
<?php include_once 'header.php'; ?>

	<div style="padding-bottom: 50px;"></div>

			<div style="padding:50px 0 20px 0;"></div>

<?php 
	$sql="SELECT * FROM answerlist ";
	$result=mysqli_query($conn, $sql);
	$resultCheck=mysqli_num_rows($result);

 ?>

		<div class="container">
			<?php if($resultCheck >0){

	while ($row1= mysqli_fetch_assoc($result))
				{ 	
?>
			
		  <div class="container col-md-9">

		  	 <?php print $row1['mydate']; ?>
		  	 <h1><?php print $row1['questiontitle']; ?></h1>
		   <span>Answered by:</span> <h5><?php print $row1['userwhoanswered']; ?></h5><p style="font-family: sans-serif; font-style: italic;"> Answer:- <?php print $row1['answertitle']; ?></p>
		   
		   
		  </div>
		     <hr class="mt-10 mb-5" style="height: 20px;">
		  <?php } } ?>

	 
		</div>


	</div>


</body>
</html>