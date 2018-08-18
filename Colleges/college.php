<?php
    include ("../Database/dbconnect.php");

    if (!isset($_SESSION["user"])) {
		echo '<script type="text/javascript">window.location = "../";</script>';
	} else {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Custom styles for this template -->
		<link rel="stylesheet" href="../../css/bootstrap1.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>College C&S</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
		<style>
		.w3-allerta {
		    font-family: "Tangerine", serif;
		}
		</style>
	</head>
	<body>
					<?php include ("../Accounts/navbar.php"); ?>
		<div id="wrapper2">
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-8">
						<div id="fh5co-blog-section">
							<div class="heading-section text-center w3-container">
							<hr>
           					<center><h1>List of Colleges in Dublin</h1></center>
           					<hr>
							</div>
							<div class="row">
								<div class="col-md-6 blog-section">
									<div class="card h-100">
										<center><img class="img-responsive" src="../img/nci/nci.jpg" alt="NCI" width="190" height="150"> </center>
										<center><h3><a href="nci/nci.php">National College of Ireland</a></h3></center>
										<center><p> Welcome to National College of Ireland. Click on the link to find out more.</p></center>
										<a class="btn btn-primary" href="nci/nci.php">Read More</a>
									</div>
								</div>
								<div class="col-md-6 blog-section">
									<div class="card h-100">
										<center><img class="img-responsive" src="../img/dit/dit.png" alt="NCI" width="190" height="150"> </center>
										<center><h3><a href="dit/dit.php">Dublin Institute of technology </a></h3></center>
										<center><p> Welcome to Dublin institute of technology. Click on the link to find out more.</p></center>
										<a class="btn btn-primary" href="dit/dit.php">Read More</a>
									</div>
								</div>
							</div>
							<br>
							<br>
							<div class="row">
								<div class="col-md-6 blog-section">
									<div class="card h-100">
										<center><img class="img-responsive" src="../img/tcd/tcd.jpg" alt="NCI" width="190" height="150"> </br> </center>
										<center><h3><a href="tcd/tcd.php"> Trinity College Dublin</a></h3></center>
										<center><p> Welcome to Trinity College Dublin. Click on the link to find out more.</p></center>
										<a class="btn btn-primary" href="tcd/tcd.php">Read More</a>
									</div>
								</div>
								<div class="col-md-6 blog-section">
									<div class="card h-100">
										<center><img class="img-responsive" src="../img/maynooth/maynooth.jpg" alt="NCI" width="190" height="150"> </br> </center>
										<center><h3><a href="maynooth/maynooth.php"> Maynooth university</a></h3></center>
										<center><p> Welcome to Maynooth University. Click on the link to find out more.</p></center>
										<a class="btn btn-primary" href="maynooth/maynooth.php">Read More</a>
									</div>
								</div>
							</div>
							<br><br>
							<div class="row">
								<div class="col-md-6 blog-section">
									<div class="card h-100">
										<center><img class="img-responsive" src="../img/ucd/ucd.jpg" alt="NCI" width="190" height="150"> </br> </center>
										<center><h3><a href="ucd/ucd.php">University College Dublin</a></h3></center>
										<center><p> Welcome to University College Dublin. Click on the link to find out more.</p></center>
										<a class="btn btn-primary" href="ucd/ucd.php">Read More</a>
									</div>
								</div>
								<div class="col-md-6 blog-section">
									<div class="card h-100">
										<center><img class="img-responsive" src="../img/dcu/dcu.jpg" alt="NCI" width="190" height="150"> </center>
										<center><h3><a href="dcu/dcu.php">Dublin City University</a></h3></center>
										<center><p> Welcome to Dublin City University. Click on the link to find out more.</p></center>
										<a class="btn btn-primary" href="dcu/dcu.php">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2"></div>
				</div>
			</div>
		</div>
		<br>
		<footer class="py-3 bg-dark">
			<div class="container">
				<p class="m-0 text-center text-light">Copyright &copy; College C&S 2018</p>
			</div>
		</footer>
	</body>
</html>
<?php } ?>
<?php $conn = null; ?>