<?php
    ob_start();
    session_start();
    include 'Accounts/Header.php';
?>
<?php 
		
			$servername="localhost";
			$username="root";
			$password="";
			$conn = new mysqli($servername, $username, $password, 'ccs');
			if ($conn->connect_error)
			{
				die("Connection failed: " . $conn->connect_error);
			}
			
			
        $nameErr = $dateofbirthErr = $emailErr = $phoneErr = "";
        $name = $dateofbirth = $email = $phone = $questions = "";
        function test_data($data)
        {
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        $errors = array();
        $valid=0; 
        if ( $_SERVER["REQUEST_METHOD"] =="POST" )
        {
            $name=$_POST["name"];
            if( empty($name) )
            {
                $nameErr = "Please Enter your Name";
                $errors[]= $nameErr ;
            }
            else
            {
                if( !preg_match("/^[a-zA-Z ]*$/",$name) )
                {
                    $nameErr = "Wrong characters in the Name";
                    $errors[]= $nameErr ;
                }
                else
                {
                    $name=test_data($name);
                    $valid++;
                }
            }
            $email=$_POST["email"];
            if( empty($email) )
            {
                $emailErr = "Please Enter Email Address";
                $errors[]= $emailErr ;
            }
            else
            {
                if( !filter_var($email, FILTER_VALIDATE_EMAIL) )
                {
                    $emailErr = "Invalid Email Address";
                    $errors[]= $emailErr ;
                }
                else
                {
                    $email=test_data($email);
                    $valid++;
                }   
            }   
            
            $phone=$_POST["phone"];
            if( empty($phone) )
            {
                $phoneErr = "Please Enter Phone Number";
                $errors[]= $phoneErr ;
            }
            else
            { 
                if( !preg_match("/^[0-9]*$/",$phone ) )
                {
                    $phoneErr = "Invalid Phone number";
                    $errors[]= $phoneErr ;
                }
                else
                {
                    $phone=test_data($phone);
                    $valid++;
                }   
            }
            $comment=$_POST["comment"];
    }
    if($valid==3)
    {
    $conn->query("INSERT INTO contact (name, email, phone ,comment) VALUES ( '".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."','".$_POST['comment']."')");
    $conn->close();
    }
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Colleges C&S </title> 
    <link rel="stylesheet" type="text/css" href="css/contactus.css">
</head>
<body>
   <div class="wrapper2">
         <?php
            
              if (isset($_POST['submit']))  {
              
              //Email information
              $to = "someone@example.com";
              $subject="Messgae from $name,$phone.";
              
              $name = $_POST['name'];
              $email = $_POST['email'];
              $phone = $_POST['phone'];
              $comment = $_POST['comment'];
              
              //send email
              mail($to, "$subject", $comment, "From:" . $email);
              
              
              echo "Thank you for contacting us!";
              $page= "admin.php";
                header("Location: $page");
              }
              
              //if variable is not filled out, display the form
              else  {
        ?> 

            <div class="row">
                <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <hr>
                        <h2 class="intro-text text-center">Contact us
                            <strong>form</strong>
                        </h2>
                        <hr>
                        <p><h6><center> Please contact us if you have any further questions or problems about our site. We will gladly get back to you.</center></h6></p>
                            <form name="contactform" method="post" action="contact.php" onSubmit="alert('Thank you for your application!!!!');">
                                    <div class="form-group">
                                        <label for="Name" align="left">Name:</label>
                                        <input type="text" class="form-control" name="name"  value="<?php echo $userRow['userName']; ?>" <span ><?php $_POST = array() ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="Email">Email:</label>
                                        <input type="text" class="form-control" name="email" value="<?php echo $userRow['userEmail']; ?>" <span ><?php $_POST = array() ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number:</label>
                                        <input type="text" class="form-control" name="phone" placeholder="08********"  value="<?php if(isset($_POST['phone']) && empty($phoneErr)){ echo $_POST['phone'];} else {echo '';}?>" required maxlength="12" minlength="10"><span class="error"><?php echo $phoneErr; ?><?php $_POST = array() ?></span>
                                    </div>
                                    <div class="form-group col-lg-16">
                                        <label>Please describe the problem or question that you have.</label>
                                        <textarea class="form-control" name="comment" rows="6" onclick="select_area()"></textarea>
                                    </div>
                        
                            <center><button type="submit" class="btn btn-primary" onclick="check_val()"; >Submit</button></center>
                            </br>
                    </form>
                    </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
        <footer class="py-3 bg-dark">
                  <div class="container">
                    <p class="m-0 text-center text-light">Copyright &copy; College C&S 2018</p>
                  </div>
            </footer>
    <?php
    }
    ?>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>