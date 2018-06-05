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
      </br>
       
        <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p class="text-white m-0">Maynooth unviersity</p>
        </div>
      </div>
      <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-8" >
          <center><p>Welcome to Maynooth University clubs and societies page, More information about the clubs and societie below </p></center>
          <img class="img-fluid rounded" src="../../img/maynooth/maynoothsoc.jpg" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <a class="twitter-timeline" data-width="350" data-height="350" href="https://twitter.com/maynoothsu?lang=en">Tweets by NCI_ClubsandSoc</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>        <!-- /.col-md-4 -->
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
                          <img class="card-img-top" src="../../img/maynooth/dramasoc.jpg" alt="">
                          <div class="card-body">
                            <h4 class="card-title">Drama Society</h4>
                            <p class="card-text">Welcome to MU Drama society, for more information click below.</p>
                          </div>
                          <div class="card-footer">
                            <a href="dramasoc.php" class="btn btn-primary">Find Out More!</a>
                          </div>
                        </div>
                      </div>
              
                      <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                          <img class="card-img-top" src="../../img/maynooth/djsoc1.jpg" alt="">
                          <div class="card-body">
                            <h4 class="card-title">DJ Society</h4>
                            <p class="card-text"> Welcome to MU university DJ society, for more information click below.</p>
                          </div>
                          <div class="card-footer">
                            <a href="djsoc.php" class="btn btn-primary">Find Out More!</a>
                          </div>
                        </div>
                      </div>
              
                      <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                          <img class="card-img-top" src="../../img/maynooth/archerysoc.jpg" alt="">
                          <div class="card-body">
                            <h4 class="card-title">Archery Club</h4>
                            <p class="card-text">Welcome to MU Archery club, for more information click below.</p>
                          </div>
                          <div class="card-footer">
                            <a href="archeryclub.php" class="btn btn-primary">Find Out More!</a>
                          </div>
                        </div>
                      </div>
              
                       <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                          <img class="card-img-top" src="../../img/maynooth/trampolinesoc.jpg" alt="">
                          <div class="card-body">
                            <h4 class="card-title">Trampoline Club</h4>
                            <p class="card-text">Welcome to MU Trampoline club, for more information about it click below.</p>
                          </div>
                          <div class="card-footer">
                            <a href="tramclub.php" class="btn btn-primary">Find Out More!</a>
                          </div>
                        </div>
                      </div>
                            <!-- Clubs and Socs list -->
                <div class="container">
                      <h2> MU Socities</h2>
                      <table class="table table-bordered">
                          <tr>
                            <td> <a href="https://msulife.ie/clubssocs/society/165" class="list-group-item list-group-item-action">Access</a></th>
                             <td> <a href="https://msulife.ie/clubssocs/society/157" class="list-group-item list-group-item-action">Animal rights</a></th>
                              <td> <a href="https://msulife.ie/clubssocs/society/119" class="list-group-item list-group-item-action">Astro 2</a></th>
                          </tr>
                          <tr>
                            <td> <a href="https://msulife.ie/clubssocs/society/100" class="list-group-item list-group-item-action"> Anthropology</a></th>
                             <td> <a href="https://msulife.ie/clubssocs/society/101" class="list-group-item list-group-item-action">Biology</a></th>
                              <td> <a href="https://msulife.ie/clubssocs/society/126" class="list-group-item list-group-item-action">Business</a></th>
                          </tr>
                          <tr>
                            <td> <a href="https://msulife.ie/clubssocs/society/259" class="list-group-item list-group-item-action">The purpose Movement</a></th>
                             <td> <a href="https://msulife.ie/clubssocs/society/184" class="list-group-item list-group-item-action"> Pokemon</a></th>
                              <td> <a href="https://msulife.ie/clubssocs/society/181" class="list-group-item list-group-item-action">Games</a></th>
                          </tr>
                          <tr>
                             <td> <a href="https://msulife.ie/clubssocs/society/189" class="list-group-item list-group-item-action">Disney</a></th>
                             <td> <a href="https://msulife.ie/clubssocs/society/188" class="list-group-item list-group-item-action">Yoga</a></th>
                              <td> <a href="https://msulife.ie/clubssocs/society/104" class="list-group-item list-group-item-action">Chinese</a></th>
                          </tr>
                      </table>
                    </div>
                     <div class="container">
                      <h2> MU Socities</h2>
                      <table class="table table-bordered">
                          <tr>
                            <td> <a href="https://msulife.ie/clubssocs/club/242" class="list-group-item list-group-item-action">Boxing</a></th>
                             <td> <a href="https://msulife.ie/clubssocs/club/209" class="list-group-item list-group-item-action">Golf</a></th>
                              <td> <a href="https://msulife.ie/clubssocs/club/221" class="list-group-item list-group-item-action">Judo</a></th>
                          </tr>
                          <tr>
                            <td> <a href="https://msulife.ie/clubssocs/club/200" class="list-group-item list-group-item-action"> Rugby</a></th>
                             <td> <a href="https://msulife.ie/clubssocs/club/199" class="list-group-item list-group-item-action">Hockey</a></th>
                              <td> <a href="https://msulife.ie/clubssocs/club/207" class="list-group-item list-group-item-action">Chess </a></th>
                          </tr>
                          <tr>
                            <td> <a href="https://msulife.ie/clubssocs/club/196" class="list-group-item list-group-item-action">Hurling</a></th>
                             <td> <a href="https://msulife.ie/clubssocs/club/192" class="list-group-item list-group-item-action"> Basketball</a></th>
                              <td> <a href="https://msulife.ie/clubssocs/club/218" class="list-group-item list-group-item-action">Surf</a></th>
                          </tr>
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
