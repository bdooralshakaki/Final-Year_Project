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

    <title> College C&S</title>

       <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../../css/bootstrap1.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

   
   <link href="../css/small-business.css" rel="stylesheet">
  </head>
  <body>
              <?php include("../../Accounts/navbar.php"); ?>
    <!-- Page Content -->
    <div class="container">
        <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p class="text-white m-0">National College of Ireland</p>
        </div>
      </div>
      <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-8" >
          <center><p>Welcome to National College of Ireland clubs and societies page, More information about the clubs and societie below </p></center>
          <img class="img-fluid rounded" src="../../img/nci/ncics.jpg" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <a class="twitter-timeline" data-width="350" data-height="350" href="https://twitter.com/NCI_ClubsandSoc?ref_src=twsrc%5Etfw">Tweets by NCI_ClubsandSoc</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>        <!-- /.col-md-4 -->
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
                      <img class="img-fluid rounded" src="../../img/nci/ncimusic.jpg" alt="">
                      <div class="card-body">
                        <h4 class="card-title">Music Society</h4>
                        <p class="card-text">Welcome to NCI Music society, for more information click below.</p>
                      </div>
                      <div class="card-footer">
                        <a href="musicsoc.php" class="btn btn-primary">Find Out More!</a>
                      </div>
                    </div>
                  </div>
          
                  <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <img class="img-fluid rounded" src="../../img/nci/nciequality.jpg" alt="">
                      <div class="card-body">
                        <h4 class="card-title">Equality Society</h4>
                        <p class="card-text"> Welcome to NCI Equality society, for more information click below.</p>
                      </div>
                      <div class="card-footer">
                        <a href="equalitysoc.php" class="btn btn-primary">Find Out More!</a>
                      </div>
                    </div>
                  </div>
          
                  <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <img class="img-fluid rounded" src="../../img/nci/ncipool1.jpg" alt="">
                      <div class="card-body">
                        <h4 class="card-title">Pool Club</h4>
                        <p class="card-text"> Welcome to NCI Pool/Snooker club, for more information click below.</p>
                      </div>
                      <div class="card-footer">
                        <a href="poolclub.php" class="btn btn-primary">Find Out More!</a>
                      </div>
                    </div>
                  </div>
          
                   <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <img class="img-fluid rounded" src="../../img/nci/ncikartingclub1.jpg" alt="">
                      <div class="card-body">
                        <h4 class="card-title">Karting Club</h4>
                        <p class="card-text">Welcome to NCI Karting Club, for more information about it click below.</p>
                      </div>
                      <div class="card-footer">
                        <a href="kartingclub.php" class="btn btn-primary">Find Out More!</a>
                      </div>
                    </div>
                  </div>
                  </br>
                <!-- Clubs and Socs list -->
                <div class="container">
                      <h2>NCI Socities</h2>
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <th> <a href="https://www.facebook.com/nci.peermentors" class="list-group-item list-group-item-action">Peer Mentors</a></th>
                             <th> <a href="https://www.facebook.com/NCIStartupSociety/" class="list-group-item list-group-item-action">Start up</a></th>
                              <th> <a href="https://www.facebook.com/NCIAirSoc/" class="list-group-item list-group-item-action">Airsoft</a></th>
                          </tr>
                           <tr>
                            <th> <a href="https://www.facebook.com/groups/738051329583800/about/" class="list-group-item list-group-item-action">Art</a></th>
                             <th> <a href="https://www.facebook.com/fashionsociety.nci" class="list-group-item list-group-item-action"> Fashion</a></th>
                              <th> <a href="https://www.facebook.com/nci.soc" class="list-group-item list-group-item-action">Card</a></th>
                          </tr>
                          <tr>
                            <th> <a href="https://www.facebook.com/search/top/?q=nci%20gaming%20society" class="list-group-item list-group-item-action">Gaming</a></th>
                             <th> <a href="https://www.facebook.com/groups/394614187307245/about/" class="list-group-item list-group-item-action">Pokemon</a></th>
                              <th> <a href="https://www.facebook.com/ncipsychologysociety/" class="list-group-item list-group-item-action">Psychology</a></th>
                          </tr>
                          <tr>
                             <th> <a href="https://www.facebook.com/NCIMovieSoc/" class="list-group-item list-group-item-action">Movie</a></th>
                             <th> <a href="https://www.facebook.com/ncisidsoc/" class="list-group-item list-group-item-action">SID SOC</a></th>
                              <th> <a href="https://www.facebook.com/netsoc.nci/?ref=br_rs" class="list-group-item list-group-item-action">NETSOC</a></th>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                     <div class="container">
                      <h2>NCI Clubs</h2>
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <th> <a href="https://www.facebook.com/nci.hurling" class="list-group-item list-group-item-action">Hurling</a></th>
                             <th> <a href="https://www.facebook.com/groups/237726892954738/about/" class="list-group-item list-group-item-action">Soccer</a></th>
                              <th> <a href="https://www.facebook.com/ncitable.tennisclub" class="list-group-item list-group-item-action">Table Tennis</a></th>
                          </tr>
                          
                          <tr>
                            <th> <a href="https://www.facebook.com/NCI-Basketball-560930627311562/" class="list-group-item list-group-item-action">Basketball</a></th>
                             <th> <a href="https://www.facebook.com/ncischolastic/" class="list-group-item list-group-item-action"> Chess</a></th>
                              <th> <a href="https://www.facebook.com/groups/754097724652439/" class="list-group-item list-group-item-action">Hockey</a></th>
                          </tr>
                          <tr>
                            <th> <a href="https://www.facebook.com/nci.dartsclub.1" class="list-group-item list-group-item-action">Darts</a></th>
                             <th> <a href="https://www.facebook.com/ncihealthandfitnessclub/" class="list-group-item list-group-item-action">Health and Fitness</a></th>
                              <th> <a href="https://www.facebook.com/ncimensfutsal/" class="list-group-item list-group-item-action">Futsal</a></th>
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

    

    <!-- Footer -->
    <footer class="py-3 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; College C&S</p>
      </div>
    </footer>
    
  </body>
</html>
<?php } ?>
<?php $conn = null; ?>