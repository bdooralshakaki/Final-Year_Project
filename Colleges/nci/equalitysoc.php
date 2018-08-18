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

    <title> Equality Society</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  </head>
  <body>
        <?php include("../../Accounts/navbar.php"); ?>
    <div class="container">
      <h1 class="my-4"> Equality Society
        <small>nci</small>
      </h1>
      <div class="row">
        <div class="col-md-8">
          <img class="img-fluid" src="../../img/nci/nciequalitysoc1.jpg" alt="">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Society Description:</h3>
          <p> NCI Equality Soc represents all the lesbian, gay, bisexual, transgender and Straight allies students at NCI.</p>
          <h4 class="my-3">Visit our social media pages</h4>
          <ul>
            <li><a href="https://www.facebook.com/NCIEqualitySoc/">Facebook </a> </li>
            <li><a href="https://ncilgbt.wordpress.com/"> WordPress</a> </li>
          </ul>
           <h4 class="my-3"> Contact us on </h4>
          <ul>
            <li> nci.lgbt@gmail.com</li>
          </ul>
          </div>
        </div>
      </div>
  </body>
</html>
<?php } ?>
<?php $conn = null; ?>
