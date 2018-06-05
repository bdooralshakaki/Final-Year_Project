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

    <title> Karting Club </title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap2.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/portfolio-item.css" rel="stylesheet">

  </head>
  <body>

    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4"> Karting Club
        <small>nci</small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="../../img/nci/kartingpic.jpg" alt="">
        </div>

        <div class="col-md-4">
          <h3 class="my-3"> Club Description:</h3>
         <p>Welcome to the NCI Karting Club! Our aim to provide students of NCI a fun karting experience in the college as well as competing against other colleges in tournaments.  
           Any suggestions or ideas please feel free to post it on our group page. Your feedback is important as it's your club! </p>
           
          <h4 class="my-3">Visit our social media pages</h4>
          <ul>
            <li><a href="https://www.facebook.com/nci.kartingclub/photos?lst=100000944630066%3A100004358101910%3A1527178713&source_ref=pb_friends_tl">Facebook </a> </li>
          </ul>
           <h4 class="my-3"> Contact us on </h4>
          <ul>
            <li> gokartingclub.nci@gmail.com</li>
          </ul>
        </div>
        
        

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Recent Pictures</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="../../img/karting1.jpg" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="../../img/karting2.jpg" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="../../img/karting3.jpg" alt="">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="../../img/karting4.jpg" alt="">
          </a>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-3 bg-dark">
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
