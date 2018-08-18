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
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top" id="mainNav">
  <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#"> </a>
       <img class="img-fluid rounded" src="../../img/logo.png" width="120" height="120">
    <div class="collapse navbar-collapse" id="mavbarResponsive">
      <ul class="navbar-nav m1-auto">
         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../Colleges/college.php">Colleges</a></li>
         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../main">Clubs & Socs</a></li>
         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../Chatbox/chat.php">Chat</a></li>
         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../Reviews/review.php">Reviews</a></li>
         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../../Events/Events1.php">Events</a></li>
      <!--   <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../about.php">About</a></li> -->
         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../contact-us">Contact us</a></li> 
      </ul>
    </div>
    <div>
      <ul class="navbar-nav m1-auto navbar-right">
        <?php
           if($_SESSION['user'])
           {
             echo '<li  class="nav-item"><a class="nav-link js-scroll-trigger"> Welcome ' . $row_session['userName'] . '</a></li>';
             echo '<li  class="nav-item"><a class="nav-link js-scroll-trigger"  href="../Accounts/logout.php"><span class="fa fa-sign-out fa-fw"></span> logout</a></li></ul>';
           }
           else 
           {
             echo '<li  class="nav-item"><a class="nav-link js-scroll-trigger"  href="../Accounts/Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
             echo '<li  class="nav-item"><a class="nav-link js-scroll-trigger"  href="../Accounts/Register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
           }       
        ?>
      </ul>
  </div><!-- /.container-fluid -->
</nav>
<?php $conn = null; ?>