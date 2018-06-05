<?php
	ob_start();
	session_start();
	include '../Database/dbconnect.php';
	include '../Accounts/Header.php';
?>


<!DOCTYPE html>
<html lang="en">

  <head>
  <title>College C&S</title>
  
  </head>
  <body>
  <div id="wrapper2">
        <div id="page-wrapper">
        	<div class="row">
        	<div class="col-lg-2"></div>
               <div class="col-lg-8">
				  <div id="fh5co-blog-section">
							<div class="heading-section text-center">
								<strong><h2>List of Colleges in Dublin</h2> </strong>
							</div>
								</br>
							<div class="row">
								<div class="col-md-6 blog-section">
									<div class="card h-100">
									 <center><img class="img-responsive" src="../img/nci/nci.jpg" alt="NCI" width="190" height="150"> </center>
									<center><h3><a href="nci.php">National College of Ireland</a></h3></center>
									<center><p> Welcome to National College of Ireland, More information about the clubs and societie, Click on the Link</p></center>
									<a class="btn btn-primary" href="../Colleges/nci/nci.php">Read More</a>
								</div>
								</div>
								
								<div class="col-md-6 blog-section">
								<div class="card h-100">
									<center><img class="img-responsive" src="../img/dit/dit.png" alt="NCI" width="190" height="150"> </center>
									<center><h3><a href="dit.php">Dublin Institute of technology </a></h3></center>
									<center><p> Welcome to Dublin institute of technology, More information about the clubs and societie, Click on the Link</p></center>
									<a class="btn btn-primary" href="../Colleges/dit/dit.php">Read More</a>
								</div>
								</div>
								
							</div>
								</br>
								</br>
								
							<div class="row">
								<div class="col-md-6 blog-section">
									<div class="card h-100">
									 <center><img class="img-responsive" src="../img/tcd/tcd.jpg" alt="NCI" width="190" height="150"> </br> </center>
									<center><h3><a href="tcd.php"> Trinity College Dublin</a></h3></center>
									<center><p> Welcome to Trinity College Dublin, More information about the clubs and societie, Click on the Link</p></center>
									<a class="btn btn-primary" href="../Colleges/tcd/tcd.php">Read More</a>
								</div>
								</div>
								
								<div class="col-md-6 blog-section">
									<div class="card h-100">
									 <center><img class="img-responsive" src="../img/maynooth/maynooth.jpg" alt="NCI" width="190" height="150"> </br> </center>
									<center><h3><a href="tcd.php"> Maynooth university</a></h3></center>
									<center><p> Welcome to Maynooth University, More information about the clubs and societie, Click on the Link</p></center>
									<a class="btn btn-primary" href="../Colleges/maynooth/maynooth.php">Read More</a>
								</div>
							</div>
						</div>
						</br>
						</br>
							<div class="row">
								<div class="col-md-6 blog-section">
									<div class="card h-100">
									 <center><img class="img-responsive" src="../img/ucd/ucd.jpg" alt="NCI" width="190" height="150"> </br> </center>
									<center><h3><a href="ucd.php">University College Dublin</a></h3></center>
									<center><p> Welcome to University College Dublin , More information about the clubs and societie, Click on the Link</p></center>
									<a class="btn btn-primary" href="../Colleges/ucd/ucd.php">Read More</a>
								</div>
								</div>
								
								<div class="col-md-6 blog-section">
									<div class="card h-100">
									 <center><img class="img-responsive" src="../img/dcu/dcu.jpg" alt="NCI" width="190" height="150"> </center>
									<center><h3><a href="dcu.php">Dublin City University</a></h3></center>
									<center><p> Welcome to Dublin City University, More information about the clubs and societie, Click on the Link</p></center>
									<a class="btn btn-primary" href="../Colleges/dcu/dcu.php">Read More</a>
								</div>
								</div>
						</div>
				  </div>
				</div>
				<div class="col-lg-2"></div>
			</div>
		</div>
	</div>
	</br>
<footer class="py-3 bg-dark">
                  <div class="container">
                    <p class="m-0 text-center text-light">Copyright &copy; College C&S 2018</p>
                  </div>
            </footer>
</body>
</html>