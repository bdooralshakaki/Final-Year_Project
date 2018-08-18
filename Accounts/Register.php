<?php
    ob_start();
    session_start();

    $host = "localhost";
    $user = "x14303766";
    $pass = "";
    $db = "ccs";
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    try {
        $opt = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false, ];
        $conn = new PDO($dsn, $user, $pass, $opt);

    	$session_user = $_SESSION['user'];

    	$query_session = $conn->prepare('SELECT * FROM users WHERE userId = ?');
		if ($query_session->execute([$session_user])) {
			$row_session = $query_session->fetch();
		}
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
    if (isset($_SESSION['user'])) {
        echo '<script type="text/javascript">window.location = "../index.php";</script>';
    } else {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Registration System</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container" style="width:500px;">
        	<div id="login-form">
        		<form method="post" name="registerForm" id="registerForm" autocomplete="off">
        			<div class="col-md-12">
        				<div class="form-group" align="center">
        					 <hr><h1 style="font-size:20px;"> Welcome to Colleges C&S Registration page</h1> <hr>
        					<img class="img-fluid" src="../img/bk.jpg" alt="bk" width="1100" height="350">
        					 <hr><h2 style="font-size:16px;">Please Sign up here to continue</h2>
        				</div>
        				<div class="form-group"><hr></div>
        				<div class="form-group">
        					<div class="input-group">
        						<span class="input-group-text"><i class="fa fa-user-o" aria-hidden="true" style="font-size:20px;"></i></span>
        						<input type="text" name="userName" class="form-control" title="Must be at least 2 characters and only letters." placeholder="Enter Name" required maxlength="50">
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="input-group">
        						<span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true" style="font-size:14px;"></i></span>
        						<input type="email" name="userEmail" class="form-control" placeholder="Enter Your Email" required maxlength="40">
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="input-group">
        						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true" style="font-size:20px;"></i></span>
        						<input type="password" name="userPass" class="form-control" placeholder="Enter Password" required maxlength="15" />
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="input-group">
        						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true" style="font-size:20px;"></i></span>
        						<input type="password" name="userPassCheck" class="form-control" placeholder="Confirm Password" required maxlength="15" />
        					</div>
        					<span class="text-danger"><?php echo $passError2; ?></span>
        				</div>
        				<div class="form-group"><hr></div>
        				<div class="form-group">
        					<button type="submit" class="btn btn-block btn-primary" name="btn-signup" id="btnSingUp">Sign Up</button>
        					<button type="submit" class="btn btn-block btn-primary" id="show_loading_icon" style="display:none;"><i class="fa fa-circle-o-notch fa-spin" style="font-size:20px;"></i> </button>
        				</div>
        				<div id="divAuthRegister" style="display:none;"></div>
        				<div class="form-group"><hr></div>
        				<div class="form-group">
        					<b><a href="../">Sign in Here...</a></b>
        				</div>
        			</div>
        			<input type="hidden" name="userId">
        			<?php $length = 48; $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); ?>
        			<input type="hidden" name="sessionId" id="sessionId" value="<?php echo $randomString; ?>">

        		</form>
        		<script type="text/javascript">
                	$("#registerForm").submit(function(e) {
                		document.getElementById('btnSingUp').setAttribute('disabled', true); //disable button so users can only submit once every 10 seconds
                		$("#show_loading_icon").show();
                		$("#btnSingUp").hide();
                		$.ajax({
                			type: "POST",
                			url: "RegisterAuth.php",
                			data: $("#registerForm").serialize(),
                			success: function(data) {
                				$("#divAuthRegister").show();
                				$("#divAuthRegister").html(data);
                				setTimeout(function() {
                					$("#btnSingUp").show();
                					$("#show_loading_icon").hide();
                					document.getElementById('btnSingUp').removeAttribute('disabled', false); //reenable button.
                					$('#divAuthRegister').fadeOut('slow');
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
<?php 
    ob_end_flush(); 
    $conn = null;
?>