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

    <title> Judo Club </title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap2.min.css" rel="stylesheet">

  </head>
  <body>
        <?php include("../../Accounts/navbar.php"); ?>
    <!-- Page Content -->
    <div class="container">
      <h1 class="my-4"> Judo Club
        <small>UCD</small>
      </h1>
      <div class="row">
        <div class="col-md-8">
          <img class="img-fluid" src="../../img/ucd/judo.jpg" alt="">
        </div>
        <div class="col-md-4">
          <h3 class="my-3">Club Description:</h3>
          <p>UCD Judo Club is open to students, staff and graduates of UCD. Training is on Tuesdays and Thursdays (4-6pm). All levels catered for, inc. beginners!</p>
          <h4 class="my-3">Visit our social media pages</h4>
          <ul>
            <li><a href="https://www.facebook.com/ucdjudoclub/">Facebook </a> </li>
            <li><a href="https://twitter.com/ucdjudo?lang=en">Twitter </a> </li>
          </ul>
           <h4 class="my-3"> Contact us on </h4>
          <ul>
            <li> judo@ucd.ie </li>
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