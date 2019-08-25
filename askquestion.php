<?php 

session_start();

include_once 'includes/dbh-inc.php';

$email=$_SESSION['u_email'];


	$sql="SELECT * FROM insertquestion";
	$result=mysqli_query($conn, $sql);
	$resultCheck=mysqli_num_rows($result);




 ?>

 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include_once 'header.php'; ?>

	<div style="padding:50px 0 10px 0;"><h1><center>Submit your question here</center></h1></div>

	<div class="container-fluid padding bg-light" style="padding-left: 500px;">
		<div class="col-md-6 col-md-offset-4 ">
			<form method="post"  enctype="multipart/form-data" action="includes/insert.php">
				
				<div class="form-group">
				<select class="form-control" name="category">
					<option value="0" selected="selected">Select Category</option>
					<option>Culture</option>
					<option>Must see places</option>
					<option>Cost and Accomodation</option>
					<option>Transportation</option>
					<option>Others</option>

					
				</select>
			</div>

				<div class="form-group" >
				<input type="text" class="form-control" name="questiontitle" placeholder="What is your question?" autocomplete="off">
				</div>

				<!-- <input type="hidden" name="useremail" value="<?php //print $email; ?>"/> -->

			  <button type="submit" class="btn btn-primary" name="request">Submit your question</button>
			</form>
		</div>


	</div>

<div style="padding:50px 0 10px 0;"><h1><center>FORUM</center></h1></div>

		

	<div class="container">

  <table class="table">

    <thead class="thead-dark">
      <tr>
        <th>Question</th>
        <th>UserEmail</th>
        <th>Category</th>
      </tr>
    </thead>

<?php if($resultCheck >0){

	while ($row= mysqli_fetch_assoc($result))
				{ 	
?>
			

    <tbody>
      <tr>
         <th > <form action="forum.php?insertid=<?php print $row['id']; ?>">  <a href="forum.php?insertid=<?php print $row['id']; ?>"> <?php print $row['question']; ?></a>
						 </th>
				        
						<th ><?php print $row['email']; ?> </th>
					   <th ><?php print $row['category']; ?></th>
				       
      </tr>
      <?php } } ?>
    </tbody>
  </table>










	
	</div>

		<div style="padding-bottom: 80px;"></div>
	<?php include_once 'footer.php'; ?>
</body>
</html>