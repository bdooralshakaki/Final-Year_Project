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

		//Making sure that the user is still logged in before continuing.
        if( !isset($_SESSION['user']) ) {
    		header("Location: ../index.php");
    	    exit;
    	} else {
    	    //check to see that none of the required fields are empty.
            if (!empty($_POST['CSName']) || !empty($_POST['CSDescription']) || !empty($_POST['CollegeName'])) {
                $statement = $conn->prepare("INSERT INTO Page (PageId, PageName, PageDescription, PageCollege) VALUES (:PageId, :PageName, :PageDescription, :PageCollege)");
                $statement->bindParam(':PageId', $_POST['PageId']);
                $statement->bindParam(':PageName', $_POST['CSName']);
                $statement->bindParam(':PageDescription', $_POST['CSDescription']);
                $statement->bindParam(':PageCollege', $_POST['CollegeName']);
                //Check to see if the Insert ran properly
                if ($statement->execute()) {
                    echo '<div class="alert alert-success alert-dismissible" style="text-align:center;">New page succesfully added</div>';
                } else {
                    echo '<div class="alert alert-danger alert-dismissible" style="text-align:center;">Sorry there were error with your insert statement. Please try again.</div>';
                }
            } else {
                echo '<div class="alert alert-danger alert-dismissible" style="text-align:center;">Sorry there were empty fields in your form. Please try again.</div>';
            }
    	}
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
    $conn == null;
    //Close connection
?>