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
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
?>