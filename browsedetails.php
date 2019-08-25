<?php session_start(); ?>

<?php 
	

	if(isset($_GET['id']))
	{
		include_once 'includes/dbh-inc.php';

		$id=$_GET['id'];
	}

	$sql="SELECT * FROM insertcatalog WHERE id=$id";
	$result=mysqli_query($conn, $sql);
	$row= mysqli_fetch_assoc($result);

	
		 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include_once 'header.php'; ?>

<div style="padding-top: 20px; "></div>
<div class="container padding" style="width: 100%; background-color: #f9f9f9 ;  >

  <div class="col-md-6 col-md-offset-1 " >

          <div class="row">
             <img src= "imgs/<?php print $row['photo']; ?>" class="img-thumbnail img-responsive" style="width:100%; height:400px; padding:10px;">
           </div>

        <div style="padding-top: 60px;"></div>


        <div class="panel panel-default">
          <!--   <div class="panel-heading text-center"><h1><b><?php //print $row['title'];  ?></b></h1></div> -->
            <div class="panel-heading text-center"><h1><u><?php print $row['name'];  ?></u></h1></div>

            <div style="padding-top: 40px;"></div>
          <div class="panel-body"style="font-family: 'ZCOOL XiaoWei', serif;"><?php print $row['description'];  ?></div>
          </div>
          


  </div>
 </div>


<div style="padding-bottom: 80px;"></div>
<?php include_once 'footer.php'; ?>
</body>
</html>