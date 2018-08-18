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

        $colname_session = "-1";
        if (isset($_SESSION['user'])) {
            $colname_session = $_SESSION['user'];
        }

        if (!empty($_POST['userEmail']) && !empty($_POST['userPass'])) {

            $checkEmail = $_POST['userEmail'];
            $checkPassword = $_POST['userPass'];

			$query_check_user = $conn->prepare('SELECT * FROM users WHERE userEmail = ? LIMIT 1');
			$query_check_user->execute([$checkEmail]);
			$row_check_user = $query_check_user->fetch(PDO::FETCH_ASSOC);
			$hash = $row_check_user['userPass'];

			if (password_verify($checkPassword, $hash)) {
			    $_SESSION['user'] = $row_check_user['sessionId'];
				echo '<script type="text/javascript">window.location = "../clubsandsoc.php";</script>';
			} else {
			    echo '<div class="alert alert-danger alert-dismissible" style="text-align:center;">Invalid username or password</div>';
			}
        }
    }

    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
?>
