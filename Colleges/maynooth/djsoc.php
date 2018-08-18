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

    <title> DJ Society</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  </head>
  <body>
    <?php include("../../Accounts/navbar.php"); ?>
    <!-- Page Content -->
    <div class="container">
      <h1 class="my-4">DJ  society
        <small>Maynooth</small>
      </h1>
      <div class="row">
        <div class="col-md-8">
          <img class="img-fluid" src="../../img/maynooth/dj1.jpg" alt="">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Society Description:</h3>
          <p> We are a bunch of DJ's of all levels, who have played a wide range of events. We are all into different music, and help teach each other. We are around to help and mentor even the newest DJ's.</p>
          <h4 class="my-3">Visit our social media pages</h4>
          <ul>
            <li><a href="https://www.facebook.com/MUDJSoc">Facebook </a> </li>
            <li><a href="https://twitter.com/MUDJSoc">Twitter </a> </li>
          </ul>
           <h4 class="my-3"> Contact Details </h4>
          <ul>
            <li> dj@nuimsu.com </li>
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