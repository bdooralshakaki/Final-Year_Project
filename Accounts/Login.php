<?php
 ob_start();
 session_start();
    include '../Database/dbconnect.php';
    
    	if ( isset($_SESSION['user'])!="" ) { // It will never let you open index(login) page if you are logged in
		   header("Location: ../clubsandsoc.php"); 
		   exit;
	    }
 
 // it will never let you open index(login) page if session is set
 if( isset($_POST['btn-login']) ) { 
  
  // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['userEmail']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['userPass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs

 if (!$error) {
			$password = hash('sha256', $pass);  
			$res = $conn->prepare('SELECT userId, userName, userPass FROM users WHERE userEmail = ? LIMIT 1');
			$res->execute([$email]);
			$row = $res->fetch(PDO::FETCH_ASSOC);
			$count = $res->rowCount();
			
			if( $count == 1 && $row['userPass'] == $password ) {
				$_SESSION['user'] = $row['userId'];
				header("Location: ../clubsandsoc.php");
			} else {
				$errMSG = "Incorrect Credentials, Try again..."; 
			}
			
			  $_SESSION['signed_in'] = true;
		     header('Location: ../clubsandsoc.php');
		     
		     while($row = mysql_fetch_assoc($result)){
		       $_SESSION['userId']    = $row['userId'];
		       $_SESSION['userEmail']  = $row['userEmail'];
		       $_SESSION['userName']  = $row['userName'];
				
		  }
   }
 }
?>
<!DOCTYPE html>
<html>
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title> Login & Registration System</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css"  />
  </head>
<body>

<div class="container">

 <div id="login-form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
     <div class="col-md-12">
        
         <div class="form-group" align="center">
             </br>
             <img class="img-fluid" src="../img/bk.jpg" alt="bk" width="1100" height="350">
             <h1> Welcome to Colleges C&S Login page</h1>
             <h2 class="">Please Sign in here to continue</h2>
            </div>
        
         <div class="form-group">
             <hr />
            </div>
            
            <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-danger">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
             <input type="email" name="userEmail" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span>
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" name="userPass" class="form-control" placeholder="Your Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
             <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
            </div>
           
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group" >
             <b><a href="Register.php">Sign Up Here...</a></b>
            </div>
        
        </div>
       
   
    </form>
    </div> 

</div>

</body>
</html>
<?php ob_end_flush(); ?>