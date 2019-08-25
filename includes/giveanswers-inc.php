<?php 

session_start();

include_once 'dbh-inc.php';

$giveanswer=$_SESSION['u_email'];
$whatisquestion=$_SESSION['questiontitle'];
if(isset($_GET['userquestion']))
{
	$mydate= date("Y-m-d H:i:s");
	$askedquestion=$_GET['userquestion'];
	$answertitle=$_GET['answertitle'];
	$answer=$_GET['answer'];

}

print "Person who ask the question:-".$askedquestion."<br>";
print "Person who answer the question:-".$giveanswer."<br>";
print "Answer Title:-".$answertitle."<br>";
print "Answer:-".$answer."<br>";
print "What is question".$whatisquestion;
   

   $sql="INSERT INTO answerlist(useremail, userwhoanswered, answertitle, answer,mydate,questiontitle) VALUES('$askedquestion','$giveanswer', '$answertitle', '$answer','$mydate', '$whatisquestion')";
  mysqli_query($conn, $sql);
		header("Location: ../askquestion.php?upload=success");
                          exit();
                      

	
 ?>