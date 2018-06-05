<?php
    ob_start();
    session_start();

    include '../Accounts/Header.php';
    include '../Database/dbconnect.php';
    include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clubs and Societies</title>

    <!-- <link href="Eventsbootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="Eventsbusiness-casual.css" rel="stylesheet"> -->
  	<link href="Eventsstyle.css" rel="stylesheet"> 
  	 
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="../text/javascript" src="js/addingajax.js"></script>
    <script src="../js/jquery.min.js"></script>
     
    
</head>

<body>
    <div id="wrapper2">
        <div id="page-wrapper">
        	<div class="row">
        	<div class="col-lg-2"></div>
               <div class="col-lg-8">
                <div class="box">
                    <div class="col-lg-12 text-center">
                        <div id="carousel-example-generic" class="carousel slide">
                    	<!-- Indicators -->

                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        </ol>
                        
                        <hr>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>

                    <h1 class="brand-name">Colleges Clubs and Socs Events</h1>
                    <hr class="tagline-divider">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <img class="img-responsive img-full" src="../img/ditmusicsoc.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="../img/nciball4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="../img/nciball7.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="../img/nciball6.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div id="wrapper2">
        <div id="page-wrapper">
        	<div class="row">
        	<div class="col-lg-2"></div>
               <div class="col-lg-8">
                <div class="box">
                  <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Events</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-12">
                    <div id="calendar_div">
                	    <?php echo getCalender(); ?>
                    </div>
                </div>
                <div class="clearfix"></div>
                </br>
                </br>
        	</div>
 		</div>
	</div>
</body>


</html>
<?php ob_end_flush(); ?>