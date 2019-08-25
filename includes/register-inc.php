<?php 



if (isset($_POST['submit']))
{
	
	include_once 'dbh-inc.php';

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$rpass=$_POST['rpass'];


		//Error Handlers

		//Check if inputs are empty
		if( empty($fname) || empty($lname) || empty($email) || empty($pass) || empty($rpass) )
		{
			header("Location: ../register.php?register=empty");
			exit();
		}

		else
		{
				//Check if input characters are valid



				//Check if names are characters
				if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname) ) 
				{
					header("Location: ../register.php?register=namemustbetext");
					exit();				
				}
				 
			 		//Check the validity of inputted value
						else
						{
							//Validate email
							if(!filter_var($email, FILTER_VALIDATE_EMAIL))
							{
								header("Location: ../register.php?register=invalidEmail");
								exit();
							}
							
							//Check if email already exists
					 		else 
					 		{				
								$sql="SELECT email FROM register WHERE email='$email'";
								$result=mysqli_query($conn,$sql);
								$resultCheck=mysqli_num_rows($result);
								if($resultCheck>0)
								{
									header("Location: ../register.php?register=EmailTaken");
									exit();
								}				
							}
						}

				//Check if password is numbers and characters				
				if (!preg_match("/^[0-9a-zA-z]*$/" , $pass))
			    {
					header("Location: ../register.php?register=passwordInvalid");
					exit();
				}

				//Check if password is between 6 and 12 characters
				if(strlen($pass)>12 || strlen($pass)<6)
				{
					header("Location: ../register.php?register=PasswordLength");
					exit();
				}

				//Check is password matches
				if($rpass!=$pass)
				{
					header("Location: ../register.php?register=NotMatch");
					exit();
				}


				//Hashing password
				else
				{
					
					$hashedPwd=password_hash($pass,PASSWORD_DEFAULT);
					$sql="INSERT INTO register (fname, lname, email, pass) VALUES  '$fname', '$lname', '$email',	'$hashedPwd')";
					mysqli_query($conn, $sql);
					header("Location: ../login.php?register=success");
					exit();				
				}
					
		}
 }


else
{
	header("Location: ../register.php");
	exit();
}









