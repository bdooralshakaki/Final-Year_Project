<?php
	ob_start();
	session_start();
	
	include '../../Database/dbconnect.php';
	include '../../Accounts/Header.php';
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Film Society</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap2.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">Film society
        <small>DIT</small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="../../img/dit/filmsoc.jpg" alt="">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Society Description:</h3>
          <p>DIT's filmmaking and appreciation society. Join for screenings, workshops and producing films. Committee: Shane Collins, Lauren Fee, Claire Cuningham, Warren Renwick, Justine Stafford and Donal Sheehan</p>
          <h4 class="my-3">Visit our social media pages</h4>
          <ul>
            <li><a href="https://www.facebook.com/DITFilmSoc/">Facebook </a> </li>
            <li><a href="https://twitter.com/ditfilmsoc?lang=en">Twitter </a> </li>
            <li><a href="https://ditfilmsociety.wordpress.com/"> WordPress </a> </li>
          </ul>
           <h4 class="my-3"> Contact us on </h4>
          <ul>
            <li> film@socs.dit.ie  </li>
          </ul>
        </div>
        
        

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Recent Pictures</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="../../img/nci/nci1.jpg" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="../../img/nci/nci2.jpg" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="../../img/nci/nci3.jpg" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="../../img/nci/nci4.jpg" alt="">
          </a>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-2 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; College C&S 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
