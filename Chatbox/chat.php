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
		
		$query_chat = $conn->prepare('SELECT * FROM chat ORDER BY id DESC LIMIT 10');
    	$query_chat->execute();
    	$count_chats = $query_chat->rowCount();
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
?>
<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lets Chat</title>
		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/bootstrap1.min.css">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	    <script type="text/javascript">
			$(document).ready(function() {
		        setInterval(function() {
					$.ajax({
		                url: "get_messages.php",
		                type: "GET",
		                success: function(data){
		                    $("#shout").empty();
		                    $("#shout").html(data);
		                },
		                error: function(){}
		            });
		        }, 2000);
		    });
		</script>
		<style>
		.w3-allerta {
		    font-family: "Tangerine", serif;
		}
		</style>
	</head>
	<body>
		<?php include('../Accounts/navbar.php'); ?>
		<div id="wrapper2">
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-8">
						<hr> <center><h1  class="w3-container w3-allerta"> Chat with other users here:</h1> </center><hr>
						<div class="chat-panel panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-comments fa-fw"></i> Chat as: <input class="testing" type="text" id="name" name="name" disabled value="<?php echo $row_session['userName']; ?>"/>
							</div>
							<div class="panel-body" id="shout">
							    <?php if ($count_chats > 0) { ?>
							    <?php while ($row_chat = $query_chat->fetch()) { ?>
							    <design>
							        <li>
    							        <span class="date"><?php echo date("d.m.Y H:i", strtotime($row_chat['date_time'])); ?></span>
    							        <span class="name"><?php echo $row_chat['name']; ?></span></br>
    							        <span class="message"><?php echo $row_chat['message']; ?></span>
							        </li>
							    </design>
							    <?php } ?>
							    <?php } else { ?>
							    <br><br>
							    <p>There are no chats to display</p>
							    <br><br>
							    <?php } ?>
							</div>
							<div class="panel-footer">
								<form method="post" name="chatform" id="chatform">
									<div class="input-group">
										<input type="text" id="message_chat" name="message" class="form-control input-sm" placeholder="Type your message here..." /> 
										<span class="input-group-btn">
											<input class="btn btn-warning btn-sm" type="submit" id="submit" value="Send"/>
										</span>
									</div> 
									<textarea id="date_time" name="date_time" style="display:none;"></textarea>
									<script type="text/javascript">
								        setInterval(function() {
								            var date = new Date();
								            var fy = date.getUTCFullYear();
								            var tm = date.getUTCMonth() + 1;
								            var td = date.getUTCDate();
								            var h = date.getUTCHours();
								            var m = date.getUTCMinutes();
								            var s = date.getSeconds();
								            tm = checkTime(tm);
								            td = checkTime(td);
								            m = checkTime(m);
								            s = checkTime(s);
								            $('#date_time').html(fy + "-"+ tm + "-" + td + " " + h + ":" + m + ":" + s );
								        }, 500);
								        function checkTime(i) {
								            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
								            return i;
								        }
								    </script>
								</form>
							</div>
						</div>
					</div>
					<script type="text/javascript">
                    	$("#chatform").submit(function(e) {
                    		$.ajax({
                    			type: "POST",
                    			url: "chatconfig.php",
                    			data: $("#chatform").serialize(),
                    			success: function(data) {
                    			    $('#message_chat').val('');
                					$.ajax({
                		                url: "get_messages.php",
                		                type: "GET",
                		                success: function(data){
                		                    $("#shout").empty();
                		                    $("#shout").html(data);
                		                },
                		                error: function(){}
                		            });
                    			}
                    		});
                    		e.preventDefault();
                    	});
					</script>
					<div class="col-lg-2"></div>
				</div>
			</div>
		</div>
        <footer class="py-3 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-light">Copyright &copy; College C&S 2018</p>
            </div>
        </footer>
	</body>
</html>
