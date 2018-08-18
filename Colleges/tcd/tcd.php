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
    <!-- Page Content -->
     <?php include("../../Accounts/navbar.php"); ?>

    <div class="container">
        <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p class="text-white m-0">Trinity College Dublin</p>
        </div>
      </div>
      <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-8" >
          <center><p>Welcome to Trinity College Dublin clubs and societies page, More information about the clubs and societie below </p></center>
          <img class="img-fluid rounded" src="../../img/tcd/tcdsocs.jpg" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <a class="twitter-timeline" data-width="350" data-height="350" href="https://twitter.com/trinitycsc?lang=en">Tweets by NCI_ClubsandSoc</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>        <!-- /.col-md-4 -->
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
                      <img class="card-img-top" src="../../img/tcd/paesoc.jpg" alt="">
                      <div class="card-body">
                        <h4 class="card-title">Paediatric Society</h4>
                        <p class="card-text">Welcome to TCD Paediatric society, for more information click below.</p>
                      </div>
                      <div class="card-footer">
                        <a href="paesoc.php" class="btn btn-primary">Find Out More!</a>
                      </div>
                    </div>
                  </div>
          
                  <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                      <img class="card-img-top" src="../../img/tcd/jazsoc.jpg" alt="">
                      <div class="card-body">
                        <h4 class="card-title">Jazz Society</h4>
                        <p class="card-text"> Welcome to TCD Jazz society, for more information click below.</p>
                      </div>
                      <div class="card-footer">
                        <a href="jazsoc.php" class="btn btn-primary">Find Out More!</a>
                      </div>
                    </div>
                  </div>
          
                  <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                      <img class="card-img-top" src="../../img/tcd/cyclingg.jpg" alt="">
                      <div class="card-body">
                        <h4 class="card-title">Cycling Club</h4>
                        <p class="card-text">Welcome to TCD cycling club, for more information click below.</p>
                      </div>
                      <div class="card-footer">
                        <a href="cyclingclub.php" class="btn btn-primary">Find Out More!</a>
                      </div>
                    </div>
                  </div>
          
                   <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                      <img class="card-img-top" src="../../img/tcd/squashsoc.jpg" alt="">
                      <div class="card-body">
                        <h4 class="card-title"> Squash Club</h4>
                        <p class="card-text">Welcome to TCD Squash club, for more information about it click below.</p>
                      </div>
                      <div class="card-footer">
                        <a href="squashclub.php" class="btn btn-primary">Find Out More!</a>
                      </div>
                    </div>
                  </div>
                         <!-- Clubs and Socs list -->
                <div class="container">
                      <h2>TCD Socities</h2>
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <th> <a href="https://www.facebook.com/tcdjapanese/?ref=br_rs" class="list-group-item list-group-item-action">Japanese</a></th>
                             <th> <a href="https://www.facebook.com/trindiansoc/?ref=br_rs" class="list-group-item list-group-item-action">Indian</a></th>
                              <th> <a href="https://www.facebook.com/tcdjazzsociety/?ref=br_rs" class="list-group-item list-group-item-action">Jazz</a></th>
                          </tr>
                           <tr>
                            <th> <a href="https://www.facebook.com/Korean.Society/?ref=br_rs" class="list-group-item list-group-item-action">Korean</a></th>
                             <th> <a href="https://www.facebook.com/biosoc/?ref=br_rs" class="list-group-item list-group-item-action"> BIO</a></th>
                              <th> <a href="https://www.facebook.com/TCDPoolSoc/?ref=br_rs" class="list-group-item list-group-item-action">Pool</a></th>
                          </tr>
                          <tr>
                            <th> <a href="https://www.facebook.com/TCDItalianSociety/?ref=br_rs" class="list-group-item list-group-item-action">Italian</a></th>
                             <th> <a href="https://www.facebook.com/TCDEnvironmentalSociety/?ref=br_rs" class="list-group-item list-group-item-action">Environmental</a></th>
                              <th> <a href="https://www.facebook.com/TCDLitSoc/?ref=br_rs" class="list-group-item list-group-item-action">Liberary</a></th>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                     <div class="container">
                      <h2 bgcolor="#FF0000">TCD Clubs</h2>
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <th> <a href="https://www.facebook.com/TCDNetball/?ref=br_rs" class="list-group-item list-group-item-action">Netball</a></th>
                             <th> <a href="https://www.facebook.com/TCDHandball/?ref=br_rs" class="list-group-item list-group-item-action">GAA</a></th>
                              <th> <a href="https://www.facebook.com/TrinityCollegeTennis/?ref=br_rs" class="list-group-item list-group-item-action">Tennis</a></th>
                          </tr>
                          
                          <tr>
                            <th> <a href="https://www.facebook.com/DucacSportsClubs/?ref=br_rs" class="list-group-item list-group-item-action">DUCAC</a></th>
                             <th> <a href="https://www.facebook.com/TCDGolfClub/?ref=br_rs" class="list-group-item list-group-item-action"> Golf</a></th>
                              <th> <a href="https://www.facebook.com/Dublinuniversitysubaquaclub/?ref=br_rs" class="list-group-item list-group-item-action">Sub-Aqua</a></th>
                          </tr>
                          <tr>
                            <th> <a href="https://www.facebook.com/PizzaSundayClub/?ref=br_rs" class="list-group-item list-group-item-action">Pizza sunday</a></th>
                             <th> <a href="https://www.facebook.com/duufc/?ref=br_rs" class="list-group-item list-group-item-action">Frisbee</a></th>
                              <th> <a href="https://www.facebook.com/igottheride/?ref=br_rs" class="list-group-item list-group-item-action">Horse racing</a></th>
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