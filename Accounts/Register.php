<?php

 require_once ("../Database/dbconnect.php");
 
    //Start Outputs
    ob_start();
   	session_start(); // Starts the session
   	
   	if( isset($_SESSION['user'])!="" ){
   		header("Location: index.php");
   	}
   	  
       
   	$error = false;

 if ( isset($_POST['btn-signup']) ) {
  
  // clean user inputs to prevent sql injections
  $name = trim($_POST['userName']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);
  
  $email = trim($_POST['userEmail']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['userPass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  
  $pass2 = trim($_POST['userPassCheck']);
  $pass2 = strip_tags($pass2);
  $pass2 = htmlspecialchars($pass2);
  
       // basic name validation
       if (empty($name)) {
             $error = true;
             $nameError = "Please enter your full name.";
       } 
       else if (strlen($name) < 3) {
             $error = true;
             $nameError = "Name must have atleat 3 characters.";
       } 
       else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
             $error = true;
             $nameError = "Name must contain alphabets and space.";
       }
       
      // EMAIL VALIDATION
       		if(!preg_match('/^x[\d]{8}@(student.ncirl.ie|dit.ie|dcu.ie|ucd.ie|tcd.ie|mu.ie)$/', $email)){ // forcing exact email
       		    // Return Error - Invalid Email
       		    $error = true;
       		    $emailError = 'The email you have entered is invalid, please try again.';
       		} 
       		else{
       			//Checking if the email already in use
       			$res = $conn->prepare("SELECT userEmail FROM users WHERE userEmail = ?");
       			$res -> execute([$email]);
       			$row = $res->fetch(PDO::FETCH_ASSOC);
       			$count = $res->rowCount();
       			
       			if($count !== 0){
       				$error = true;
       				$emailError = "Provided Email is already in use.";
       			}
       		}
	  	// EMAIL VALIDATION
   
   
   // PASSWORD VALIDATION
    		if (empty($pass)){
    			$error = true;
    			$passError = "Please enter password.";
    		} 
    		else if(strlen($pass) < 6) {
    			$error = true;
    			$passError = "Password must have atleast 6 characters.";
    		}
    		else if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z!@#$%]{8,120}$/', $pass)){
    			$error = true;
    			$passError = "Passwords needs at least one number, at least one small and one capital letter as also the length of 8+ ";
    		}
    		else if(empty($pass2)){
    			$error = true;
    			$pass2Error = "Please confirm your password.";
    		}
    		else if($_POST['userPassCheck']!= $_POST['userPassCheck']){
    		    $error = true;
    		    $pass2Error = "Oops! Password's do not match! Try again.";
    		 }
    		else if($_POST['userPassCheck'] == $_POST['userName']){
    			$error = true;
    			$passError = "Password cannot be the same as name";
    		}
  // PASSWORD VALIDATION
  
  // password encrypt using SHA256();
		$password = hash('sha256', $pass);
  
  // if there's no error, continue to signup
   
       if( !$error ){
     	        $stmt = $conn->prepare("INSERT INTO users (userName, userEmail, userPass, userDate) VALUES (:userName, :userEmail, :userPass, NOW())");
     	        $stmt->bindParam(':userName', $name);
     	        $stmt->bindParam(':userEmail', $email);
     	        $stmt->bindParam(':userPass', $password);
     	        $stmt->execute();
           			if ($res) {
           				$errTyp = "success";
           				$errMSG = "Successfully registered, you may login now";
           				unset($name);
           				unset($email);
           				unset($pass);
           				unset($pass2);
           			} 
           			else{
           				$errTyp = "danger";
           				$errMSG = "Something went wrong, try again later...";	
           			}	
     		}
 }
 
?> 
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>College C&S</title>
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
             <h1>Welcome to Colleges C&S Registraion page</h1>
             <h2 class=""> Please Sign up below:</h2>
            </div>
         <div class="form-group">
             <hr />
            </div>
            
            <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
             <input type="text" name="userName" class="form-control"  title="Must be at least 2 characters and only letters."  placeholder="Enter Name" maxlength="50" value="<?php echo $name ?>" />
                </div>
                <span class="text-danger"><?php echo $nameError; ?></span>
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
             <input type="email" name="userEmail" class="form-control" placeholder="Enter Your Email" maxlength="40" value="<?php echo $email ?>" />
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span>
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" name="userPass" class="form-control" placeholder="Enter Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" name="userPassCheck" class="form-control" placeholder="Enter Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError2; ?></span>
            </div>
            
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <b><a href="Login.php">Sign in Here...</a></b>
            </div>
   
    </form>
    </div> 

</div>


</body>
</html>
<?php ob_end_flush(); ?>