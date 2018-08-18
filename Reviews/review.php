<?php
    date_default_timezone_set('Europe/Ireland');
    
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
		
		$query_reviews = $conn->prepare('SELECT * FROM review');
		$query_reviews->execute();

	}
	catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}

	if (isset($_SESSION["user"])) {
?>
<!DOCTYPE html>
<html>
	<head>
	    <title>Review </title>
	    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
         <link rel="stylesheet" type="text/css" href="../css/events.css">
    <link rel="stylesheet" href="../css/bootstrap1.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	    <script type="text/javascript">
			$(document).ready(function() {
				$.ajax({
	                url: "get_review.php",
	                type: "GET",
	                success: function(data){
	                    $("#getReviews").empty();
	                    $("#getReviews").html(data);
	                },
	                error: function(){}
	            });
		    });
		</script>
			<style>
		.w3-allerta {
		    font-family: "Tangerine", serif;
		}
		</style>
	</head>
	<body>
	    <?php include '../Accounts/navbar.php'; ?>
	    <hr> 
	    <center><h1 class="w3-container w3-allerta">College C&S Review page</h1> </center>
	    <hr>
	    <div align="center">
	        <form method="POST"  name="frmReview" id="frmReview">
				<div align='enter'>
					<div class='row'>
						<div class='col-md-4' style='float: none; margin: 0 auto'>
							<div class='form-group'>
								<center>
									<select class='form-control' name='cPic' required>
									    <option value='-1' selected> Select a college to review</option>
										<option value='Natinal college of Ireland'> NCI</option>
	                                    <option value='Dublin institute of technology'>DIT</option>
	                                    <option value='University College Dublin '> UCD </option>
	                                    <option value='Trinity College'>TCD</option>
	                                    <option value='Dublin City University'>DCU</option>
	                                    <option value='Maynooth University'>Maynooth University</option>
	                                </select>
								</center>
							</div>
						</div>
					</div>
					<input type='hidden' name='cid'>
					<input type='hidden' name='uid' value="<?php echo $row_session['sessionId']; ?>">
					<input type='hidden' name='date' value="<?php echo date('Y-m-d H:i:s'); ?>">
					<textarea class="form-control" name='message' style="max-width:700px;height:400px;resize:none;" required placeholder="Write your review..."></textarea><br>
                    
				    <div id="divReview" style="display:none;width:500px;"></div>
				    
					<button type="submit" class="btn btn-primary" name="btnSubmitReview" id="btnSubmitReview"> Submit Review </button>
					<button type="button" class="btn btn-primary" id="show_loading_icon" style="display:none;"><i class="fa fa-circle-o-notch fa-spin" style="font-size:20px;"></i> </button>
				</div>
			</form>
			<br>
			<div id="getReviews"></div>
            <br><br><br><br><br><br>
            <script type="text/javascript">
            	$("#frmReview").submit(function(e) {
            		$("#show_loading_icon").show();
            		$("#btnSubmitReview").hide();
            		$.ajax({
            			type: "POST",
            			url: "post_review.php",
            			data: $("#frmReview").serialize(),
            			success: function(data) {
            				$("#divReview").show();
            				$("#divReview").html(data);
            				setTimeout(function() {
            					$("#btnSubmitReview").show();
            					$("#show_loading_icon").hide();
            					document.getElementById('btnSubmitReview').removeAttribute('disabled', false); //reenable button.
            					$('#divReview').fadeOut('slow');
            					document.getElementById('frmReview').reset();
            				}, 5000); //Fade out slowly (hide) after 10 seconds (Time is in miliseconds)
                    		$.ajax({
                    			type: "POST",
                    			url: "get_review.php",
                    			data: $("#frmReview").serialize(),
                    			success: function(data) {
                    				$("#getReviews").html(data);
                    			}
                    		});
            			}
            		});
            		e.preventDefault();
            	});
            </script>
		</div>
		<br><br>
        <footer class="py-3 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-light">Copyright &copy; College C&S 2018</p>
            </div>
        </footer>
	</body>
</html>
<?php } else { ?>
<script type="text/javascript">window.location = "../";</script>
<?php } ?>
<?php $conn = null; ?>