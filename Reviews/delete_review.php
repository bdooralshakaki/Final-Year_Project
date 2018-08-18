<?php
    date_default_timezone_set('Europe/Ireland');
    
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

		$stmt = $conn->prepare("DELETE FROM review WHERE cid = :delete_cid");
		$stmt->bindParam(':delete_cid', $delete_cid);
		$delete_cid = $_POST['delete_cid'];
		$stmt->execute();

	}
	catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}

    $conn = null;
    
    /*
    

function editComments($conn) {
    if (isset($_POST['commentSubmit'])) {
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $messsage = $_POST['message'];
        $sql = "UPDATE review SET message='$messsage' WHERE cid='$cid' ";
        $result = $conn->query($sql);
        header("Location: review.php");
    }
    
}
function deleteComments($conn){
     if (isset($_POST['commentDelete'])) {
        $cid = $_POST['cid'];
        
        $sql =  "DELETE FROM review WHERE cid='$cid'";
        $result = $conn->query($sql);
        header("Location: review.php"); 
    }
}
?>

*/
?>