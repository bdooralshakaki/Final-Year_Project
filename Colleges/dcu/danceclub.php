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

    <title> Dance Club</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  </head>
  <body>
        <?php include ("../../Accounts/navbar.php"); ?>
    <!-- Page Content -->
    <div class="container">
      <h1 class="my-4">Dance Club
        <small>DCU</small>
      </h1>
      <div class="row">
        <div class="col-md-8">
          <img class="img-fluid" src="../../img/dcu/dance.jpg" alt="">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Club Description:</h3>
          <p> This is DCU Dance club  new official Facebook page! You can find all the information about our events, classes and squad performances right here!</p>
          <h4 class="my-3">Visit our social media pages</h4>
          <ul>
            <li><a href="https://www.facebook.com/DCUDance/">Facebook </a> </li>
          </ul>
           <h4 class="my-3"> Contact us on </h4>
          <ul>
            <li> DCUDance@gmail.com </li>
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