<?php

	session_start();



			if (isset($_POST['submit'])) {
				include_once 'dbh-inc.php';

				$username=$_POST['user_email'];
				$password=$_POST['user_pwd'];

				if(empty($username) || empty($password)){
					header("Location: ../login.php?login=empty");
					exit();
				}
				else
				{
					$sql="SELECT * FROM register WHERE email= '$username'";
					$result=mysqli_query($conn, $sql);
					$resultCheck=mysqli_num_rows($result);
					if($resultCheck<1)
						{
							header("Location: ../login.php?login=error");
							exit();
						}else
							{
							if ($row= mysqli_fetch_assoc($result)) 
							{
		
								//login the user 
								$_SESSION['id']=$row['id'];
					
								$_SESSION['u_email']=$row['email'];
								header("Location: ../askquestion.php?login=sucess");
								exit();


							 }
					
							}
				}
		}
	

else{
	header("Location: ../login.php?login=empty");
	exit();
}

