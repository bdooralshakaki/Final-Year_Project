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

        if (!empty($_POST['userName']) || !empty($_POST['userEmail']) || !empty($_POST['userPass']) || !empty($_POST['userPassCheck'])) {

            $checkUsername = trim($_POST['userName']);
            $checkEmail = trim($_POST['userEmail']);

            $query_check_user = $conn->prepare('SELECT * FROM users WHERE userName = ? OR userEmail = ?');
        	$query_check_user->execute([$checkUsername, $checkEmail]);
        	$row_check_user = $query_check_user->fetch(PDO::FETCH_ASSOC);
            if ($row_check_user) {
                echo '<div class="alert alert-danger alert-dismissible">The username or email you are trying to use already exists</div>';
            } else {
                if (!preg_match("/^[a-zA-Z ]+$/", $_POST['userName'])) {
                    echo '<div class="alert alert-danger alert-dismissible" style="text-align:center;">Name must contain alphabets and space.</div>';
                } else if (!preg_match('/^x[\d]{8}@(student.ncirl.ie|dit.ie|dcu.ie|ucd.ie|tcd.ie|mu.ie)$/', $_POST['userEmail'])){ // forcing exact email
           		    echo '<div class="alert alert-danger alert-dismissible" style="text-align:center;">The email you have entered is invalid, please try again.</div>';
           		} else if (strlen($_POST['userPass']) < 6) {
                    echo '<div class="alert alert-danger alert-dismissible" style="text-align:center;">Password must have atleast 6 characters</div>';
           		} else if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z!@#$%]{8,120}$/', $_POST['userPass'])) {
           		    echo '<div class="alert alert-danger alert-dismissible" style="text-align:center;">Passwords needs at least one number, at least one small and one capital letter as also the length of 8+</div>';
           		} else if ($_POST['userPass'] !== $_POST['userPassCheck']) {
           		    echo '<div class="alert alert-danger alert-dismissible" style="text-align:center;">Oops! Passwords do not match! Try again.</div>';
           		} else if ($_POST['userPass'] == $_POST['userName']) {
           		    echo '<div class="alert alert-danger alert-dismissible" style="text-align:center;">Password cannot be the same as name.</div>';
           		} else {
                    $stmt = $conn->prepare("INSERT INTO users (userId, userName, userEmail, userPass, sessionId) VALUES (:userId, :userName, :userEmail, :userPass, :sessionId)");
                    $stmt->bindParam(':userId', $_POST['userId']);
                    $stmt->bindParam(':userName', $_POST['userName']);
                    $stmt->bindParam(':userEmail', $_POST['userEmail']);
                    $stmt->bindParam(':userPass', $hash_pass);
                    $stmt->bindParam(':sessionId', $_POST['sessionId']);
                    $password_register = $_POST['userPass'];
                    $hash_pass = password_hash($password_register, PASSWORD_DEFAULT);
                    if ($stmt->execute()) {
                        echo '<div class="alert alert-success alert-dismissible" style="text-align:center;">User successfully registered. You can now login.</div>';
                        echo '<script type="text/javascript">window.location = "../";</script>';
                    } else {
                        echo '<div class="alert alert-danger alert-dismissible" style="text-align:center;">There was an error with your insert. Please contact system admin.</div>';
                    }
                }
            }
        } else {
            echo "Please make sure that all the required fields are not empty";
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
?>