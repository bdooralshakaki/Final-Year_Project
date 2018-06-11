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

    	// if session is not set this will redirect to login page
    	if( !isset($_SESSION['user']) ) {
    		header("Location: ../index.php");
    		exit;
    	}

    	$session_user = $_SESSION['user'];
    	$query_session = $conn->prepare('SELECT * FROM users WHERE userId = ?');
		if ($query_session->execute([$session_user])) {
			$row_session = $query_session->fetch();
		}

    	$res = $conn->prepare('SELECT * FROM users WHERE userId = ?');
		if ($res->execute([$_SESSION['user']])) {
			$userRow = $res->fetch();
		}
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap1.min.css">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top" id="mainNav">
  <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#"> </a>
       <img class="img-fluid rounded" src="../../img/logo.png" width="120" height="120">
    <div class="collapse navbar-collapse" id="mavbarResponsive">
      <ul class="navbar-nav m1-auto">
         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../Colleges/college.php">Colleges</a></li>
         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../clubsandsoc.php">Clubs & Socs</a></li>
         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../Chatbox/chat.php">Chat</a></li>
         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../Reviews/review.php">Reviews</a></li>
         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../Events/Events1.php">Events</a></li>
      <!--   <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../about.php">About</a></li> -->
         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../contact.php">Contact us</a></li> 
      </ul>
    </div>
    <div>
      <ul class="navbar-nav m1-auto navbar-right">
        <?php
           if($_SESSION['signed_in'])
           {
             echo '<li  class="nav-item"><a class="nav-link js-scroll-trigger"> Welcome ' . $row_session['userName'] . '</a></li>';
             echo '<li  class="nav-item"><a class="nav-link js-scroll-trigger"  href="../Accounts/Logout.php"><span class="fa fa-sign-out fa-fw"></span> Logout</a></li></ul>';
           }
           else 
           {
             echo '<li  class="nav-item"><a class="nav-link js-scroll-trigger"  href="../Accounts/Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
             echo '<li  class="nav-item"><a class="nav-link js-scroll-trigger"  href="../Accounts/Register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
           }       
        ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</body>
</html>
<?php ob_end_flush(); ?>