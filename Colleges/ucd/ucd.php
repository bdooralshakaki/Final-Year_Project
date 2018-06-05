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

    <title> College C&S</title>

       <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../../css/bootstrap1.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

    <!-- Custom fonts for this template -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'> -->
   <!-- <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'> -->
   <link href="../css/small-business.css" rel="stylesheet">
  </head>
  <body>
    <!-- Page Content -->
  <div class="container">
      <div class="card text-white bg-secondary my-4 text-center">
          <div class="card-body">
          <p class="text-white m-0"> University College Dublin</p>
        </div>
      </div>
      <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-8" >
          <center><p>Welcome to University College Dublin clubs and societies page, More information about the clubs and societie below </p></center>
          <img class="img-fluid rounded" src="../../img/ucd/ucdsoc.jpg" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <a class="twitter-timeline" data-width="350" data-height="350" href="https://twitter.com/ucdsocieties?lang=en">Tweets by UCD_ClubsandSoc</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>        <!-- /.col-md-4 -->
          </div>
          </br>
        <!-- /.row -->

      <!-- Content Row -->
  <div id="wrapper2">
    <div id="page-wrapper">
      <div class="row">
        	<div class="col-lg-8"></div>
              <div class="col-lg-12">
                <div class="row text-center">
                  <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                      <img class="card-img-top" src="../../img/ucd/artsoc.jpg" alt="">
                      <div class="card-body">
                        <h4 class="card-title"> Arts Society</h4>
                        <p class="card-text">Welcome to UCD Arts society, for more information click below.</p>
                      </div>
                      <div class="card-footer">
                        <a href="artsoc.php" class="btn btn-primary">Find Out More!</a>
                      </div>
                    </div>
                  </div>
          
                  <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                      <img class="card-img-top" src="../../img/ucd/chesssoc.jpg" alt="">
                      <div class="card-body">
                        <h4 class="card-title">Chess Society</h4>
                        <p class="card-text"> Welcome to UCD Chess society, for more information click below.</p>
                      </div>
                      <div class="card-footer">
                        <a href="chesssoc.php" class="btn btn-primary">Find Out More!</a>
                      </div>
                    </div>
                  </div>
          
                  <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                      <img class="card-img-top" src="../../img/ucd/judosoc.jpg" alt="">
                      <div class="card-body">
                        <h4 class="card-title">Judo Club</h4>
                        <p class="card-text">Welcome to UCD Judo club, for more information click below.</p>
                      </div>
                      <div class="card-footer">
                        <a href="judoclub.php" class="btn btn-primary">Find Out More!</a>
                      </div>
                    </div>
                  </div>
          
                   <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                      <img class="card-img-top" src="../../img/ucd/handball.jpg" alt="">
                      <div class="card-body">
                        <h4 class="card-title">UCD GAA Club</h4>
                        <p class="card-text">Welcome to UCD GAA club, for more information about it click below.</p>
                      </div>
                      <div class="card-footer">
                        <a href="handball.php" class="btn btn-primary">Find Out More!</a>
                      </div>
                    </div>
                  </div>
                        <!-- Clubs and Socs list -->
                <div class="container">
                      <h2>UCD Socities</h2>
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <th> <a href="https://www.facebook.com/UCDMUSICALSOCIETY/?ref=br_rs" class="list-group-item list-group-item-action">Music</a></th>
                             <th> <a href="https://www.facebook.com/ucdhispanicsociety/?ref=br_rs" class="list-group-item list-group-item-action">Hispanic </a></th>
                              <th> <a href="https://www.facebook.com/ucdeconomicssociety/?ref=br_rs" class="list-group-item list-group-item-action">Economics </a></th>
                          </tr>
                           <tr>
                            <th> <a href="https://www.facebook.com/UCDNewmanSociety/?ref=br_rs" class="list-group-item list-group-item-action">Newman</a></th>
                             <th> <a href="https://www.facebook.com/UCD-French-Society-278853952124958/?ref=br_rs" class="list-group-item list-group-item-action"> French</a></th>
                              <th> <a href="https://www.facebook.com/UCDMedSoc/?ref=br_rs" class="list-group-item list-group-item-action">Medical</a></th>
                          </tr>
                          <tr>
                            <th> <a href="https://www.facebook.com/UCDHistorySociety/?ref=br_rs" class="list-group-item list-group-item-action">History</a></th>
                             <th> <a href="https://www.facebook.com/thefoodsoc/?ref=br_rs" class="list-group-item list-group-item-action">Food</a></th>
                              <th> <a href="https://www.facebook.com/UCDrussian/?ref=br_rs" class="list-group-item list-group-item-action">Russian</a></th>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                     <div class="container">
                      <h2>UCD Clubs</h2>
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <th> <a href="https://www.facebook.com/UCDsurfclub/?ref=br_rs" class="list-group-item list-group-item-action">Surf</a></th>
                             <th> <a href="https://www.facebook.com/UCDSubAquaClub/?ref=br_rs" class="list-group-item list-group-item-action">Sub-Aqua</a></th>
                              <th> <a href="https://www.facebook.com/ncitable.tennisclub" class="list-group-item list-group-item-action">Table Tennis</a></th>
                          </tr>
                          
                          <tr>
                            <th> <a href="https://www.facebook.com/UCDBoxingClub/?ref=br_rs" class="list-group-item list-group-item-action">Boxing</a></th>
                             <th> <a href="https://www.facebook.com/UcdNetballClub/?ref=br_rs" class="list-group-item list-group-item-action"> Netball</a></th>
                              <th> <a href="https://www.facebook.com/ucdboatclub/?ref=br_rs" class="list-group-item list-group-item-action">Boat</a></th>
                          </tr>
                          <tr>
                            <th> <a href="https://www.facebook.com/ucdjudoclub/?ref=br_rs" class="list-group-item list-group-item-action">Judo</a></th>
                             <th> <a href="https://www.facebook.com/ucdsailing/?ref=br_rs" class="list-group-item list-group-item-action">Sailing</a></th>
                              <th> <a href="https://www.facebook.com/ucdkarate/?ref=br_rs" class="list-group-item list-group-item-action">Karate</a></th>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <footer class="py-3 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; College C&S</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
  
   

  </body>

</html>
