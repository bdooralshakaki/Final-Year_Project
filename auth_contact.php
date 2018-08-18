<?php
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
		
        if (!empty($_POST['name_contact']) || !empty($_POST['email_contact']) || !empty($_POST['phone_contact']) || !empty($_POST['comment_contact'])) {
        	$statement = $conn->prepare("INSERT INTO contact (id, name, email, phone, comment) VALUES (:id, :name, :email, :phone, :comment)");
        	$statement->bindParam(':id', $_POST['id']);
        	$statement->bindParam(':name', $_POST['name_contact']);
        	$statement->bindParam(':email', $_POST['email_contact']);
        	$statement->bindParam(':phone', $_POST['phone_contact']);
        	$statement->bindParam(':comment', $_POST['comment_contact']);
        	//Check to see if the Insert ran properly
        	if ($statement->execute()) {
        		$to = "someone@example.com";
        		$subject="Messgae from $name, $phone.";
        					  
        		$name = $_POST['name'];
        		$email = $_POST['email'];
        		$phone = $_POST['phone'];
        		$comment = $_POST['comment'];
        		
        		//send email
        		$mail_status = mail($to, "$subject", $comment, "From:" . $email);
        		
        		//Check to see if the mail was sent.
        		if ($mail_status) {
        			echo "Thank you for contacting us!";
        		} else {
        			echo "Sorry we could not send your email. Please try again.";
        		}
        	} else {
        		echo "Sorry there were error with your insert statement. Please try again.";
        	}
        } else {
        	echo "Sorry there were errors in your form. Please try again.";
        }

    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
    $conn == null;
    //Close connection
?>