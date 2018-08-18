<?php
    include ("../../Database/dbconnect.php");

    if (!isset($_SESSION["user"])) {
		echo '<script type="text/javascript">window.location = "../";</script>';
	} else {
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    <?php include("../../Accounts/navbar.php"); ?>
    <!-- Page Content -->
    <div class="container">
      <h1 class="my-4">Trampoline Clubs
        <small>MU</small>
      </h1>
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
  </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
<?php } ?>
<?php $conn = null; ?>