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
		echo "Connection failed: " . $e->getMessage();
	}

	if (isset($_SESSION["user"])) {
		echo '<script type="text/javascript">window.location = "clubsandsoc.php";</script>';
	} else {
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title> Login System</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container" style="width:500px;">
            <div id="login-form">
        		<form method="post" name="loginForm" id="loginForm" autocomplete="off">
        			<div class="col-md-12">
        				<div class="form-group" align="center">
        					<hr> <h1 style="font-size:25px;"> Welcome to Colleges C&S Login page</h1> <hr>
        					<img class="img-fluid" src="../img/bk.jpg" alt="bk" width="1100" height="350">
        					 <hr><h2 style="font-size:20px;">Please Sign in here to continue</h2>
        				</div>
        				<div class="form-group"><hr></div>
        				<div class="form-group">
        					<div class="input-group">
        						<span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true" style="font-size:14px;"></i></span>
        						<input type="email" class="form-control" name="userEmail" id="userEmail" placeholder="Your Email" required maxlength="40" autocomplete="off" autofocus>
        					</div>
        				</div>
        
        				<div class="form-group">
        					<div class="input-group">
        						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true" style="font-size:20px;"></i></span>
        						<input type="password" class="form-control" name="userPass" id="userPass" placeholder="Your Password" required maxlength="15" autocomplete="off">
        					</div>
        				</div>
        				<div class="form-group"><hr></div>
        				<div class="form-group">
        					<button type="submit" class="btn btn-block btn-primary" name="btn-login" id="btnSignIn">Sign In</button>
        					<button type="submit" class="btn btn-block btn-primary" id="show_loading_icon" style="display:none;"><i class="fa fa-circle-o-notch fa-spin" style="font-size:20px;"></i> </button>
        				</div>
        				<div id="divAuthLogin" style="display:none;"></div>
        				<div class="form-group"> <hr> </div>
        				<div class="form-group">
        					<b><a href="Accounts/Register.php">Sign Up Here...</a></b>
        				</div>
        			</div>
        		</form>
        		<script type="text/javascript">
                	$("#loginForm").submit(function(e) {
                		document.getElementById('btnSignIn').setAttribute('disabled', true); //disable button so users can only submit once every 10 seconds
                		$("#show_loading_icon").show();
                		$("#btnSignIn").hide();
                		$.ajax({
                			type: "POST",
                			url: "Accounts/Login.php",
                			data: $("#loginForm").serialize(),
                			success: function(data) {
                				$("#divAuthLogin").show();
                				$("#divAuthLogin").html(data);
                				setTimeout(function() {
                					$("#btnSignIn").show();
                					$("#show_loading_icon").hide();
                					document.getElementById('btnSignIn').removeAttribute('disabled', false); //reenable button.
                					$('#divAuthLogin').fadeOut('slow');
                					document.getElementById('contactform').reset();
                				}, 5000); //Fade out slowly (hide) after 10 seconds (Time is in miliseconds)
                			}
                		});
                		e.preventDefault();
                	});
                </script>
        	</div>
        </div>
    </body>
</html>
<?php } ?>
<?php $conn = null; ?>