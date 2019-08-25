<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	

	<div style="padding:50px 0 10px 0;"><h1><center>UPLOAD</center></h1></div>

	<div class="container-fluid padding bg-light">
		<div class="col-md-6 col-md-offset-2 register">
			<form method="post" action="includes/upload-inc.php" enctype="multipart/form-data">
				
				<div class="form-group" >
				<input type="text" class="form-control" name="name" placeholder="Name" autocomplete="off">
				</div>

				<div class="form-group">
					<span style="color: black; ">Upload Cover of your Book:</span> <br>
					 <div class="btn btn-default  float-left">
	      				<span>Choose files</span>
	      				<input type="file" name="photo">
	    			</div>	    			
  				</div>


			
				<div class="form-group" >
				<input type="text" class="form-control" name="title" placeholder="Title " autocomplete="off">
				</div>

			

				Desciption<div class="form-group">
				  <textarea class="form-control" rows="5" name="description"></textarea>
			</div>

				

				<button type="submit" class="btn btn-default" name="submit">Upload </button>
			</form>
		</div>
	</div>


</body>
</html>