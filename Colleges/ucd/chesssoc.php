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

    <title> Chess Society</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap2.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">Chess society
        <small>UCD</small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="../../img/ucd/chess.jpg" alt="">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Society Description:</h3>
          <p>Welcome to UCD Chess! We are open to players of all levels; from basic to advanced. We will teach you step-by-step if you are new to Chess too! Keep an eye on our site over the coming weeks as we prepare content for the start of a new year.</p>
          <h4 class="my-3">Visit our social media pages</h4>
          <ul>
            <li><a href="https://www.facebook.com/pg/UCDchess/photos/?tab=album&album_id=1801690556778541">Facebook </a> </li>
            <li><a href="https://twitter.com/UCDchess">Twitter </a> </li>
          </ul>
           <h4 class="my-3"> Contact us on </h4>
          <ul>
            <li> chess.society@ucd.ie </li>
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
