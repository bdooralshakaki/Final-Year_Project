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
  </head>
  <body>
    <!-- Page Content -->
    <div class="container">
        <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p class="text-white m-0"> Dublin City University</p>
        </div>
      </div>
      <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-8" >
          <center><p>Welcome to Dublin City Unviersity clubs and societies page, More information about the clubs and societie below </p></center>
          <img class="img-fluid rounded" src="../../img/dcu/dcucs.jpg" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <a class="twitter-timeline" data-width="350" data-height="350" href="https://twitter.com/DCUSU?lang=en">Tweets by DCU_ClubsandSoc</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>        <!-- /.col-md-4 -->
          </div>
         
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
                        <img class="card-img-top" src="../../img/dcu/africasoc1.jpg" alt="">
                        <div class="card-body">
                          <h4 class="card-title"> Africa Society</h4>
                          <p class="card-text">Welcome to DCU Africa society, for more information click below.</p>
                        </div>
                        <div class="card-footer">
                          <a href="africasoc.php" class="btn btn-primary">Find Out More!</a>
                        </div>
                      </div>
                    </div>
            
                    <div class="col-lg-3 col-md-6 mb-4">
                      <div class="card">
                        <img class="card-img-top" src="../../img/dcu/danceclub.jpg" alt="">
                        <div class="card-body">
                          <h4 class="card-title">Dance Club</h4>
                          <p class="card-text"> Welcome to DCU Dance Club, for more information click below.</p>
                        </div>
                        <div class="card-footer">
                          <a href="danceclub.php" class="btn btn-primary">Find Out More!</a>
                        </div>
                      </div>
                    </div>
            
                    <div class="col-lg-3 col-md-6 mb-4">
                      <div class="card">
                        <img class="card-img-top" src="../../img/dcu/scisoc.jpg" alt="">
                        <div class="card-body">
                          <h4 class="card-title">Science society</h4>
                          <p class="card-text">Welcome to DCU Science Society, for more information click below.</p>
                        </div>
                        <div class="card-footer">
                          <a href="scisoc.php" class="btn btn-primary">Find Out More!</a>
                        </div>
                      </div>
                    </div>
            
                     <div class="col-lg-3 col-md-6 mb-4">
                      <div class="card">
                        <img class="card-img-top" src="../../img/dcu/karateclub.jpg" alt="">
                        <div class="card-body">
                          <h4 class="card-title">Karate Club</h4>
                          <p class="card-text">Welcome to DCU Karate club, for more information about it click below.</p>
                        </div>
                        <div class="card-footer">
                          <a href="karateclub.php" class="btn btn-primary">Find Out More!</a>
                        </div>
                      </div>
                    </div>
              <!-- Clubs and Socs list -->
                <div class="container">
                      <h2>DCU Socities</h2>
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <th> <a href="https://www.facebook.com/af.soc/?ref=br_rs" class="list-group-item list-group-item-action">A&F</a></th>
                             <th> <a href="https://www.facebook.com/DCULawSociety/?ref=br_rs" class="list-group-item list-group-item-action">LAW</a></th>
                              <th> <a href="https://www.facebook.com/DCUPGS/?ref=br_rs" class="list-group-item list-group-item-action">Postgradute</a></th>
                          </tr>
                           <tr>
                            <th> <a href="https://www.facebook.com/DCUISOC/?ref=br_rs" class="list-group-item list-group-item-action">Islamic</a></th>
                             <th> <a href="https://www.facebook.com/dcudjsociety/?ref=br_rs" class="list-group-item list-group-item-action"> DJ</a></th>
                              <th> <a href="https://www.facebook.com/dcudrama/?ref=br_rs" class="list-group-item list-group-item-action">Drama</a></th>
                          </tr>
                          <tr>
                            <th> <a href="https://www.facebook.com/dcunursingsoc/?ref=br_rs" class="list-group-item list-group-item-action">Nursing</a></th>
                             <th> <a href="https://www.facebook.com/DcuFlacSociety/?ref=br_rs" class="list-group-item list-group-item-action">FLAC</a></th>
                              <th> <a href="https://www.facebook.com/musicsocietydcu/?ref=br_rs" class="list-group-item list-group-item-action">Music</a></th>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                     <div class="container">
                      <h2 bgcolor="#FF0000">DCU Clubs</h2>
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <th> <a href="https://www.facebook.com/DCUrowing/?ref=br_rs" class="list-group-item list-group-item-action">Rowing</a></th>
                             <th> <a href="https://www.facebook.com/dcusoccer/?ref=br_rs" class="list-group-item list-group-item-action">Soccer</a></th>
                              <th> <a href="https://www.facebook.com/dcutennis/?ref=br_rs" class="list-group-item list-group-item-action">Tennis</a></th>
                          </tr>
                          
                          <tr>
                            <th> <a href="https://www.facebook.com/DCUCavingClub/?ref=br_rs" class="list-group-item list-group-item-action">Caving</a></th>
                             <th> <a href="https://www.facebook.com/dcuhurling/?ref=br_rs" class="list-group-item list-group-item-action"> Hurling</a></th>
                              <th> <a href="https://www.facebook.com/DCUKarate/?ref=br_rs" class="list-group-item list-group-item-action">Karate</a></th>
                          </tr>
                          <tr>
                            <th> <a href="https://www.facebook.com/DCUCanoe/?ref=br_rs" class="list-group-item list-group-item-action">Canoe</a></th>
                             <th> <a href="https://www.facebook.com/DCUcyclingclub/?ref=br_rs" class="list-group-item list-group-item-action">Cycling</a></th>
                              <th> <a href="https://www.facebook.com/dcuboxing/?ref=br_rs" class="list-group-item list-group-item-action">Boxing</a></th>
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
