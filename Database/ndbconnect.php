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

    	$session_user = $_SESSION['user'];

    	$query_session = $conn->prepare('SELECT * FROM users WHERE userId = ?');
		if ($query_session->execute([$session_user])) {
			$row_session = $query_session->fetch();
		}
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>