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

    <title> UCD GAA Club </title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    <?php include("../../Accounts/navbar.php"); ?>
    <!-- Page Content -->
    <div class="container">
      <h1 class="my-4"> UCD GAA Club
        <small>UCD</small>
      </h1>
      <div class="row">
        <div class="col-md-8">
          <img class="img-fluid" src="../../img/ucd/handballsoc.jpg" alt="">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Club Description:</h3>
          <p> The Handball Club is one of the longest established clubs in the University and competes both domestically and on the international stage. It is a fast traditional sport requiring high levels of fitness, played as singles or doubles in the handball alley and one-wall handball courts in UCD Sport. </p>
          <h4 class="my-3">Visit our social media pages</h4>
          <ul>
            <li><a href="https://www.facebook.com/gaaucd/">Facebook </a> </li>
            <li><a href="https://twitter.com/UCDGAA">Twitter </a> </li>

          </ul>
           <h4 class="my-3"> Contact us on </h4>
          <ul>
            <li> ucdgaa@ucd.ie </li>
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