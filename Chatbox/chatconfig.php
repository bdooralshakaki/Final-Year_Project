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

        if(!empty($_POST['message'])) {
            
            $stmt = $conn->prepare("INSERT INTO chat (date_time, name, message) VALUES (:date_time, :name_chat, :message)");
            /*** bind the params ***/
            $stmt->bindParam(':date_time', $date_time);
            $stmt->bindParam(':name_chat', $name_chat);
            $stmt->bindParam(':message', $message);
            $date_time = $_POST['date_time'];
            $name_chat = $row_session['userName'];
            $message = $_POST['message'];
            $stmt->execute();
        } else {
            echo "Please make sure that all fields have been filled out.";
        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
?>