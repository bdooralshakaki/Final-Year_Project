<?php
    if (!isset($_SESSION)) {
        session_start();
    }

    $host = "localhost";
    $user = "x14303766";
    $pass = "";
    $db = "ccs";
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
	try {
        $opt = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false, ];
        $conn = new PDO($dsn, $user, $pass, $opt);

        $colname_session = "-1";
		if (isset($_SESSION['user'])) {
			$colname_session = $_SESSION['user'];
		}
		$query_session = $conn->prepare('SELECT * FROM users WHERE sessionId = ?');
		if ($query_session->execute([$colname_session])) {
			$row_session = $query_session->fetch();
		}
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

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
       <link rel="stylesheet" href="../../css/bootstrap1.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</head>
	<body id="page-top">
	    <?php include ("../Accounts/navbar.php"); ?>
	  	<br>
	  	<br>
		<div class="container" style="margin:auto;width:500px;">
		    <div class="card" style="padding:30px;">
		    	<hr>
		    	<h2 style="text-align:center;"> Create a page </h2>
		    	<hr>
    			 <p style="text-align:center;">
                            <h6>
                                Please fill out the form to add a page.
                            </h6>
                        </p>
    			<div id="login-form">
    				<form method="post" name="frmCreatePage" id="frmCreatePage">
    					<div class="col-md-12">
    						<div class="form-group">
    							<label for="CSName"><h5>Club/soc name</h5></label>
    							<input type="text" class="form-control" name="CSName" id="PageName" required placeholder="eg Chess " autocomplete="off" autofocus><br>
    						</div>
    						<div class="form-group">
    							<label for="CSDescription"><h5>Description</h5></label>
    							<input type="text" class="form-control" name="CSDescription" id="PageDescription" required placeholder="This is the chess club" autocomplete="off"><br>
    						</div>
    						<div class="form-group">
    							<label for="CollegeName"><h5>College</h5></label>
    							<input type="text" class="form-control" name="CollegeName" id="PageCollege" required placeholder="NCI, Dit .." autocomplete="off"><br>
    						</div>
    						<div class="form-group">
    							<button type="submit" name="submit" class="btn btn-block btn-primary" id="btnCreatePage">Create Page</button>
    							<button type="submit" class="btn btn-block btn-primary" id="show_loading_icon" style="display:none;"><i class="fa fa-circle-o-notch fa-spin" style="font-size:20px;"></i> </button>
    						</div>
    						<div id="divCreatePage" style="display:none;"></div>
    					</div>
    					<input type="hidden" name="PageId">
    				</form>
    				<script type="text/javascript">
                    	$("#frmCreatePage").submit(function(e) {
                    		document.getElementById('btnCreatePage').setAttribute('disabled', true); //disable button so users can only submit once every 10 seconds
                    		$("#show_loading_icon").show();
                    		$("#btnCreatePage").hide();
                    		$.ajax({
                    			type: "POST",
                    			url: "create_page.php",
                    			data: $("#frmCreatePage").serialize(),
                    			success: function(data) {
                    				$("#divCreatePage").show();
                    				$("#divCreatePage").html(data);
                    				setTimeout(function() {
                    					$("#btnCreatePage").show();
                    					$("#show_loading_icon").hide();
                    					document.getElementById('btnCreatePage').removeAttribute('disabled', false); //reenable button.
                    					$('#divCreatePage').fadeOut('slow');
                    					document.getElementById('frmCreatePage').reset();
                    				}, 5000); //Fade out slowly (hide) after 10 seconds (Time is in miliseconds)
                    			}
                    		});
                    		e.preventDefault();
                    	});
                    </script>
                    <div class="col-lg-2"></div>
    			</div>
    		</div>
		</div>
	</div>
	</br> </br> </br> </br> </br>
       	<footer class="py-3 bg-dark">
			<div class="container">
				<p class="m-0 text-center text-light">Copyright &copy; College C&S 2018</p>
			</div>
		</footer>
    </body>
</html>
<?php } ?>
<?php $conn = null; ?>