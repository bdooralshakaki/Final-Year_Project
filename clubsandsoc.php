<?php
    ob_start();
    session_start();
    
    include 'Database/dbconnect.php';
    include_once 'Accounts/Header.php';
    
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clubs and Socs</title>

    <!-- Custom styles for this template -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
   
    
    <script>
      function myFunction() {
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } 
            else {
              tr[i].style.display = "none";
            }
          }
         }
        }
    </script>

  </head>
  <body>

    <!-- Page Content -->
    <div class="container">
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
           <center><h1 class="my-4">Welcome to Clubs and Societies page</h1></center>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('../img/nciball1.jpg')">
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('../img/nciball2.jpg')">
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('../img/nciball3.jpg')">
          </div>
           <div class="carousel-item" style="background-image: url('../img/ditball.jpg')">
          </div>
           <div class="carousel-item" style="background-image: url('../img/ucdball.jpg')">
          </div>
           <div class="carousel-item" style="background-image: url('../img/nciball4.jpg')">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </br>
   

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <center><h4 class="card-header">Chatbox</h4></center>
             <img class="img-responsive" src="../img/chat.jpg" alt="NCI" width="348" height="150">
            <div class="card-body">
              <p class="card-text">this is the chatbox to chat with other users from other colleges.</p>
            </div>
            <div class="card-footer">
              <center><a href="../Chatbox/chat.php" class="btn btn-primary">Chatbox</a></center>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <center><h4 class="card-header">Reviews</h4></center>
                <img class="img-responsive" src="../img/review.jpg" alt="NCI" width="348" height="150">
            <div class="card-body">
              <p class="card-text">This is the reviews page to see other users reviews.</p>
            </div>
            <div class="card-footer">
              <center><a href="../Reviews/review.php" class="btn btn-primary">Reviews</a></center>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <center><h4 class="card-header">Events</h4></center>
                <img class="img-responsive" src="../img/event.jpg" alt="NCI" width="348" height="150">
            <div class="card-body">
              <p class="card-text">This is the events pages to check active events.</p>
            </div>
            <div class="card-footer">
              <center><a href="../Events/Events1.php" class="btn btn-primary">Events</a></center>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      </br>
      <!-- Features Section -->
      <div class="row">
        </br>
        </br>
         <div class="col-lg-8">
           <img class="img-fluid rounded" src="img/newcs.jpg" alt="">
           </br>
           </br>
          <h2>Clubs and Socs</h2>
          <ul>
            <li>Reviews</li>
            <li>Chatbox</li>
            <li>Events</li>
            <li>List of all the clubs and societies </li>
          </ul>
          <p>Clubs and societies is all about getting involved and making the most of it with other people and take a break from college work.</p>
        </div>
         <div class="col-md-4">
                            <center><h2> Colleges Clubs & Socs List</h2></center>
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="    Search for names.." title="Type in a name">
                             <div class="scroll">
                            <table id="myTable">
                              <tr class="header">
                                 <th style="width:40%;">Colleges</th>
                                <th style="width:60%;">Clubs</th>
                                <th style="width:40%;">Socs</th>
                              </tr>
                              <tr>
                                <td>NCI</td>
                                <td>Badminton</td>
                                <td>Music</td>
                              </tr>
                              <tr>
                                <td>DIT</td>
                                <td>Baketball</td>
                                <td>Art</td>
                              </tr>
                              <tr>
                                <td>DCU</td>
                                <td>Chess</td>
                                <td>Gaming</td>
                              </tr>
                              <tr>
                                <td>UCD</td>
                                <td>Gaelic Football</td>
                                <td>Fashion</td>
                              </tr>
                              <tr>
                                <td>TCD</td>
                                <td>Golf</td>
                                <td>Dance</td>
                              </tr>
                              <tr>
                                <td>Maynooth</td>
                                <td>Hurling</td>
                                <td>Computing</td>
                              </tr>
                              <tr>
                                <td>NCI</td>
                                <td>Pool and Snooker</td>
                                <td>Christian Union</td>
                              </tr>
                               </tr>
                              <tr>
                                <td>DIT</td>
                                <td>Hockey</td>
                                <td>Comdedy</td>
                              </tr>
                               </tr>
                              <tr>
                                <td>UCD</td>
                                <td>Karting</td>
                                <td>Darts</td>
                              </tr>
                               </tr>
                              <tr>
                                <td>DCU</td>
                                <td>Soccer</td>
                                <td>Fantasy Football</td>
                              </tr>
                              <tr>
                                <td>TCD</td>
                                <td>Table Tennis</td>
                                <td>Peer Mentor</td>
                              </tr>
                              <tr>
                                <td>Maynooth</td>
                                <td>Tennis</td>
                                <td>Reachout</td>
                              </tr>
                              <tr>
                                <td>NCI</td>
                                <td>Unlimate Frisbee</td>
                                <td>Xbox</td>
                              </tr>
                            </table>
                    </div>
                  </div>
    
       
      </div>
      </br>
      <!-- /.row -->

    </div>
    <!-- /.container -->

   <footer class="py-3 bg-dark">
                  <div class="container">
                    <p class="m-0 text-center text-light">Copyright &copy; College C&S 2018</p>
                  </div>
            </footer>
            
    <!-- Bootstrap core JavaScript -->
   
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
