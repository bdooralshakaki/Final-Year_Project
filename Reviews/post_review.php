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

        if ($_POST['cPic'] !== '-1' && !empty($_POST['message'])) {
            $stmt = $conn->prepare("INSERT INTO review (cid, uid, date, cPic, message) VALUES (:cid, :uid, :date, :cPic, :message)");
            $stmt->bindParam(':cid', $_POST['cid']);
            $stmt->bindParam(':uid', $_POST['uid']);
            $stmt->bindParam(':date', $_POST['date']);
            $stmt->bindParam(':cPic', $_POST['cPic']);
            $stmt->bindParam(':message', $_POST['message']);
            if ($stmt->execute()) {
                echo '<div class="alert alert-success alert-dismissible" style="text-align:center;">Your review has been submitted</div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible" style="text-align:center;">Sorry, could not submit review. Please try again later.</div>';
            }
        } else {
            echo '<div class="alert alert-danger alert-dismissible" style="text-align:center;">Sorry, could not submit review. Please try again.</div>';
        }

	}
	catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}

    $conn = null;
    
    /*
    
function getComments($conn) {
    $sql = "SELECT * FROM review";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<div class='comment-box'><p>";
            echo $row['userName']."<br>";
            echo $row['date']."<br>";
            echo $row['cPic']."<br>";
            echo nl2br ($row['message']);
            echo "</p>";
            if($_SESSION["user"] == $row['uid']){
                echo "<form class='delete-form' method='POST' action='".deleteComments($conn)."'>
                        <input type='hidden' name='cid' value='".$row['cid']."'>
                        <button type='submit' name='commentDelete'>Delete</button>
                    </form> 
                    <form class='edit-form' method='POST' action='editComment.php'>
                        <input type='hidden' name='cid' value='".$row['cid']."'>
                        <input type='hidden' name='uid' value='".$row['uid']."'>
                        <input type='hidden' name='date' value='".$row['date']."'>
                        <input type='hidden' name='message' value='".$row['message']."'>
                        <button>Edit</button>
                    </form>";
               
            }
            
            echo " </div>";
    }
    
}
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