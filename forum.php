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
		$question=$row['question'];
	}

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php include_once 'header.php'; ?>

	<div style="padding:50px 0 10px 0;"><h1><center>Details</center></h1></div>


		<div class="container padding" style="width: 100%; background-color:	#f9f9f9	;">

		
				
			<div class="col-md-3">
				
				<ul class="list-group">
  					
  					<li class="list-group-item">Category : <?php print $row['category']; ?></li>
  					
				</ul>
				 



  				
			</div>


			<div class="padding" style="padding-top: 10px;">
				<form action="includes/giveanswers-inc.php" method="get">
				<div class="form-group">
				    <input type="text" class="form-control" placeholder="Answer" name="answertitle" autocomplete="off"> 
			  </div>
			  
			<input type="hidden" name="userquestion" value="<?php print $row['email']; ?>"/>

			
			<button type="submit" class="btn btn-primary" name="submitfeed" >Submit Answer</button>

			</form>
			</div>
						
		</div>

			<div style="padding-bottom: 50px;"></div>

			<div style="padding:50px 0 20px 0;"><h1><center><?php print $row['question']; ?></center></h1></div>

<?php 
	$sql="SELECT * FROM answerlist WHERE useremail='$email' ";
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
		    <h5><?php print $row1['userwhoanswered']; ?></h5><p style="font-family: sans-serif; font-style: italic;"> Answer:- <?php print $row1['answertitle']; ?></p>
		   
		   
		  </div>
		     <hr class="mt-10 mb-5" style="height: 20px;">
		  <?php } } ?>

	 
		</div>


	</div>

	<!-- <?php //include_once 'footer.php'; ?> -->
</body>
</html>