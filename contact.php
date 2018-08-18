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
<html>
    <head>
        <title>Colleges C&S </title>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/contactus.css">
        <link rel="stylesheet" type="text/css" href="../css/events.css">
        <link rel="stylesheet" href="../css/bootstrap1.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php include("Accounts/navbar.php"); ?>
        <br><br>
        <div class="wrapper2">
            <div class="row">
                <div class="col-lg-2"></div>
                <div style="margin: auto;">
                    <div class="card" style="padding:20px;width:600px;">
                        <div style="text-align:center;">
                            <hr>
                            <h2 class="intro-text text-center">
                                Contact us <strong>form</strong>
                            </h2>
                            <hr>
                        </div>
                        <p style="text-align:center;">
                            <h6>
                                Please contact us if you have any further questions or problems about our site. We will gladly get back to you.
                            </h6>
                        </p>
                        <form name="contactform" id="contactform" method="post">
                            <div class="form-group">
                                <label for="Name" align="left">Name:</label>
                                <input type="text" class="form-control" name="name_contact" id="name" placeholder="Please enter your full name" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email:</label>
                                <input type="email" class="form-control" name="email_contact" id="email" placeholder="Please enter your email address" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                <input type="tel" class="form-control" name="phone_contact" id="phone" placeholder="08********" required maxlength="12" minlength="10" autocomplete="off">
                            </div>
                            <div class="form-group col-lg-16">
                                <label>Please describe the problem or question that you have.</label>
                                <textarea class="form-control" name="comment_contact" rows="6"></textarea>
                            </div>
                            <div class="alert alert-primary" role="alert" id="divAuthContact" style="display:none;"></div>
                            <center><button type="submit" class="btn btn-primary" id="submitContact">Submit </button></center>
                            <center><button type="submit" class="btn btn-primary" id="show_loading_icon" style="display:none;"><i class="fa fa-circle-o-notch fa-spin" style="font-size:20px;"></i> </button></center>
                            </br>
                            <input type="hidden" name="id">
                        </form>
                        <script type="text/javascript">
                            $("#contactform").submit(function(e) {
                                document.getElementById('submitContact').setAttribute('disabled', true); //disable button so users can only submit once every 10 seconds
                                $("#show_loading_icon").show();
                                $("#submitContact").hide();
                                $.ajax({
                                    type: "POST",
                                    url: "auth_contact.php",
                                    data: $("#contactform").serialize(),
                                    success: function(data) {
                                        $("#divAuthContact").show();
                                        $("#divAuthContact").html(data);
                                        setTimeout(function() {
                                            $("#submitContact").show();
                                            $("#show_loading_icon").hide();
                                            document.getElementById('submitContact').removeAttribute('disabled', false); //reenable button.
                                            $('#divAuthContact').fadeOut('slow');
                                            document.getElementById('contactform').reset();
                                        }, 5000); //Fade out slowly (hide) after 10 seconds (Time is in miliseconds)
                                    }
                                });
                                e.preventDefault();
                            });
                        </script>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
        <br><br>
        <footer class="py-3 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-light">Copyright &copy; College C&S 2018</p>
            </div>
        </footer>
    </body>
</html>
<?php } ?>
<?php $conn = null; ?>
