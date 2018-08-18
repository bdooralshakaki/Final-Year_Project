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
    	if ($query_chat->execute()) {
    	    $count_chats = $query_chat->rowCount();
            if ($count_chats > 0) {
                echo '<design>';
                while ($row_chat = $query_chat->fetch()) {
                    echo '<li>';
                    echo '<span class="date">'.date("d.m.Y H:i", strtotime($row_chat['date_time'])).'</span>';
                    echo '<span class="name">'.$row_chat['name'].'</span></br>';
                    echo '<span class="message">'.$row_chat['message'].'</span>';
                    echo '</li>';
                }
                echo '</design>';
            } else {
                echo "<br><br><p>There are no chats to display</p><br><br>";
            }
    	} else {
    	    echo "Sorry there was an error getting the messages";
    	}
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
?>