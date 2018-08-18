
<?php
	// *** Logout the current user.
	$logoutGoTo = "../index.php";

	if (!isset($_SESSION)) {
		session_start();
	}
	
	unset($_SESSION['user']);

	if ($logoutGoTo != "") {
		header("Location: $logoutGoTo");
		exit;
	}
?>
z