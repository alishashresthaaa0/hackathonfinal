<?php 

session_start();


if(isset($_POST['request']))
{
	include_once 'dbh-inc.php';
	
	$email=$_SESSION['u_email'];
	$_SESSION['questiontitle']=$_POST['questiontitle'];
	
	print $_SESSION['questiontitle'];
	$category =$_POST['category'];
	$question=$_POST['questiontitle'];


	$sql="INSERT INTO insertquestion(email, category, question) VALUES ('$email', '$category' ,'$question') ";
	if(mysqli_query($conn, $sql))
	{
		header("Location: ../askquestion.php?upload=success");
                          exit();
                      
	}
	else{
		header("Location: ../askquestions?upload=error");
                          exit();
	}




}



 ?>