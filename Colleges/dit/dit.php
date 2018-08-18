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
  </head>
  <body>
          <?php include("../../Accounts/navbar.php"); ?>
    <!-- Page Content -->
    <div class="container">
        <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p class="text-white m-0">Dublin institute of technology</p>
        </div>
      </div>
      <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-8" >
          <center><p>Welcome to Dublin institute of technology clubs and societies page, More information about the clubs and societie below </p></center>
          <img class="img-fluid rounded" src="../../img/dit/ditcs.jpg" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <a class="twitter-timeline" data-width="350" data-height="350" href="https://twitter.com/ditsocieties?lang=en">Tweets by DIT_ClubsandSoc </a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>        <!-- /.col-md-4 -->
          </div>
          </br>
    
       <div id="wrapper2">
          <div id="page-wrapper">
            <div class="row">
              	<div class="col-lg-8"></div>
                    <div class="col-lg-12">
                      <div class="row text-center">
                        <div class="col-lg-3 col-md-6 mb-4">
                          <div class="card">
                            <img class="card-img-top" src="../../img/dit/baking.jpg" alt="">
                            <div class="card-body">
                              <h4 class="card-title">Baking Society</h4>
                              <p class="card-text">Welcome to DIT Baking society, for more information click below.</p>
                            </div>
                            <div class="card-footer">
                              <a href="bakingsoc.php" class="btn btn-primary">Find Out More!</a>
                            </div>
                          </div>
                        </div>
                
                        <div class="col-lg-3 col-md-6 mb-4">
                          <div class="card">
                            <img class="card-img-top" src="../../img/dit/film.jpg" alt="">
                            <div class="card-body">
                              <h4 class="card-title">Film Society</h4>
                              <p class="card-text"> Welcome to DIT Film society, for more information click below.</p>
                            </div>
                            <div class="card-footer">
                              <a href="filmsoc.php" class="btn btn-primary">Find Out More!</a>
                            </div>
                          </div>
                        </div>
                
                        <div class="col-lg-3 col-md-6 mb-4">
                          <div class="card">
                            <img class="card-img-top" src="../../img/dit/boxing.jpg" alt="">
                            <div class="card-body">
                              <h4 class="card-title">Boxing Club</h4>
                              <p class="card-text">Welcome to DIT Boxing club, for more information click below.</p>
                            </div>
                            <div class="card-footer">
                              <a href="boxingclub.php" class="btn btn-primary">Find Out More!</a>
                            </div>
                          </div>
                        </div>
                
                         <div class="col-lg-3 col-md-6 mb-4">
                          <div class="card">
                            <img class="card-img-top" src="../../img/dit/ditcricket.jpg" alt="">
                            <div class="card-body">
                              <h4 class="card-title">Cricket Club</h4>
                              <p class="card-text">Welcome to DIT Cricket club, for more information about it click below.</p>
                            </div>
                            <div class="card-footer">
                              <a href="cricketclub.php" class="btn btn-primary">Find Out More!</a>
                            </div>
                          </div>
                        </div>
                        
            <!-- Clubs and Socs list -->
                <div class="container">
                      <h2>DIT Socities</h2>
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <th> <a href="https://www.facebook.com/bantersoc/?ref=br_rs" class="list-group-item list-group-item-action">Banter</a></th>
                             <th> <a href="https://www.facebook.com/radiosocdit/" class="list-group-item list-group-item-action">Radio</a></th>
                              <th> <a href="https://www.facebook.com/DITBakingSoc/" class="list-group-item list-group-item-action">Baking</a></th>
                          </tr>
                           <tr>
                            <th> <a href="https://www.facebook.com/DITPhysicsSoc/" class="list-group-item list-group-item-action">Physics</a></th>
                             <th> <a href="https://www.facebook.com/AeronauticalSocDIT/" class="list-group-item list-group-item-action"> Aeronautical</a></th>
                              <th> <a href="https://www.facebook.com/NetSocDIT/" class="list-group-item list-group-item-action">NETSOC</a></th>
                          </tr>
                          <tr>
                            <th> <a href="https://www.facebook.com/NutritionSoc/" class="list-group-item list-group-item-action">Nutrition</a></th>
                             <th> <a href="https://www.facebook.com/DITGreenSociety/" class="list-group-item list-group-item-action">Green</a></th>
                              <th> <a href="https://www.facebook.com/ZombieSoc-340239679325375/" class="list-group-item list-group-item-action">Zombie</a></th>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                     <div class="container">
                      <h2 bgcolor="#FF0000">DIT Clubs</h2>
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <th> <a href="https://www.facebook.com/DITrowing/?ref=br_rs" class="list-group-item list-group-item-action">Rowing</a></th>
                             <th> <a href="https://www.facebook.com/DITSoccer/?ref=br_rs" class="list-group-item list-group-item-action">Soccer</a></th>
                              <th> <a href="https://www.facebook.com/DITtennis/?ref=br_rs" class="list-group-item list-group-item-action">Tennis</a></th>
                          </tr>
                          
                          <tr>
                            <th> <a href="https://www.facebook.com/ditcaving/?ref=br_rs" class="list-group-item list-group-item-action">Caving</a></th>
                             <th> <a href="https://www.facebook.com/DITRifle/?ref=br_rs" class="list-group-item list-group-item-action"> Rifle</a></th>
                              <th> <a href="https://www.facebook.com/DITJudoClub/?ref=br_rs" class="list-group-item list-group-item-action">Judo</a></th>
                          </tr>
                          <tr>
                            <th> <a href="https://www.facebook.com/ditkartingclub/?ref=br_rs" class="list-group-item list-group-item-action">Karting</a></th>
                             <th> <a href="https://www.facebook.com/DIT-Cycling-Club-159419624075682/?ref=br_rs" class="list-group-item list-group-item-action">Cycling</a></th>
                              <th> <a href="https://www.facebook.com/DITsailing/?ref=br_rs" class="list-group-item list-group-item-action">Sailing</a></th>
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
      <!-- /.container -->
    </footer>
  
   

  </body>

</html>
<?php } ?>
<?php $conn = null; ?>