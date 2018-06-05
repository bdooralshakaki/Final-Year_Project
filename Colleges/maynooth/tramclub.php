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

    <title> Trampoline Club </title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap2.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/portfolio-item.css" rel="stylesheet">

  </head>
  <body>
    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">Trampoline Clubs
        <small>MU</small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="../../img/maynooth/trampoline.jpg" alt="">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Club  Description:</h3>
          <p>Welcome to MUTC, Maynooth's only stop for Gymnastic Trampolining!
            Fancy traveling across the country and abroad to compete for you University? Want to give a unique sport a try for the very first time?</p>
          
          <h4 class="my-3">Visit our social media pages</h4>
          <ul>
            <li><a href="https://www.facebook.com/maynoothtramps/">Facebook </a> </li>
            <li><a href="https://twitter.com/MaynoothTramps">Twitter</a> </li>
            <li><a href="https://www.youtube.com/channel/UCEUGne3eYA3ghRPoWg_CB-Q">YouTube</a> </li>
      
          </ul>
           <h4 class="my-3"> Contact Details </h4>
          <ul>
            <li> trampoline@nuimsu.com </li>
          </ul>
        </div>
      </div>
      
      
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
    </div>
   

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
