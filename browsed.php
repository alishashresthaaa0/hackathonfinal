<?php session_start(); ?>
<?php include_once 'includes/dbh-inc.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include_once 'header.php'; ?>

	<div class="container">
		<h1 class="text-center">Discover</h1>

		<?php

$sql="SELECT * FROM insertcatalog ORDER by id DESC;";
$result=mysqli_query($conn,$sql);
$resultCheck=mysqli_num_rows($result);

if($resultCheck > 0 )
{ ?>

	

		<div class="row">
			<?php while ($row= mysqli_fetch_assoc($result))
	{  
?>

			<div class="col-md-4">
				<form method="get" action="browsedetails.php?id=<?php print $row['id'];  ?>">	
				<div class="single-blog">
					<p class="blog-meta"><?php print $row['name']; ?> </p>
					<img src="imgs/<?php print $row['photo']; ?>"> <br><br>
					<h2><?php print $row['title']; ?></h2>
					<!-- <p class="blog-text"><?php //print $row['shortdescribe']; ?></p> -->

					<input type="hidden" name="id" value="<?php print $row['id']; ?>"/>
					<p><button class="read-more-btn" type="submit" name="submit" value="View Details">Read More...</button></p>
				</div>
			</form>

			</div>
<?php } ?>


				
			</div>

		</div>
	</div>

<?php }  ?>

<div style="padding-bottom: 80px;"></div>
<?php include_once 'footer.php'; ?>


</body>
</html>