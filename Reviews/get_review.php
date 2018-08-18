<?php
    date_default_timezone_set('Europe/Ireland');
    
	if (!isset($_SESSION)) {
		session_start();
	}

    $host = "localhost";
    $user = "x14303766";
    $pass = "";
    $db     = "ccs";
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
		
		$query_reviews = $conn->prepare('SELECT * FROM review ORDER BY cid DESC');
		$query_reviews->execute();

	}
	catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
	
	while ($row_reviews = $query_reviews->fetch()) {

	$query_review_users = $conn->prepare('SELECT * FROM users WHERE sessionId = ?');
	$query_review_users->execute([$row_reviews['uid']]);
	$row_review_users = $query_review_users->fetch();
		
?>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<div class="card" style="width: 44rem;text-align:left;" id="divReview-<?php echo $row_reviews['cid']; ?>">
	<div class="card-body">
		<h5 class="card-title"><?php echo $row_review_users['userName']; ?></h5>
		<h6 class="card-subtitle mb-2 text-muted"><?php echo $row_reviews['cPic']; ?> | <?php echo $row_reviews['date']; ?></h6>
		<div id="review-<?php echo $row_reviews['cid']; ?>">
		    <p class="card-text" style="color:black;"><?php echo nl2br ($row_reviews['message']); ?></p>
		</div>
        <?php if ($row_reviews['uid'] == $row_session['sessionId']) { ?>
        <br>
        <div id="divActionButtons-<?php echo $row_reviews['cid']; ?>">
            <button href="#" class="btn btn-danger" id="btnDeleteReview-<?php echo $row_reviews['cid']; ?>">Delete</button>
            <button href="#" class="btn btn-primary" id="btnEdit-<?php echo $row_reviews['cid']; ?>">Edit</button>
            <br><br>
    	</div>
    	<form name="frmDeleteReview" id="frmDeleteReview-<?php echo $row_reviews['cid']; ?>" method="post" style="display:none;">
            <input type="hidden" name="delete_cid" value="<?php echo $row_reviews['cid']; ?>">
    	</form>
    	<form name="frmEditReview" id="frmEditReview-<?php echo $row_reviews['cid']; ?>" method="post" style="display:none;">
            <textarea class="form-control" name="editReview" style="resize:none;"><?php echo nl2br ($row_reviews['message']); ?></textarea>
            <br>
            <button href="#" class="btn btn-primary" id="btnEditReview-<?php echo $row_reviews['cid']; ?>">Update</button>
            <input type="hidden" name="cid" value="<?php echo $row_reviews['cid']; ?>">
    	</form>
    	<script type="text/javascript">
        	$("#btnDeleteReview-<?php echo $row_reviews['cid']; ?>").click(function(e) {
        		$.ajax({
        			type: "POST",
        			url: "delete_review.php",
        			data: $("#frmDeleteReview-<?php echo $row_reviews['cid']; ?>").serialize(),
        			success: function(data) {
        			    $("#divReview-<?php echo $row_reviews['cid']; ?>").hide();
        			}
        		});
        		e.preventDefault();
        	});
        	$("#btnEdit-<?php echo $row_reviews['cid']; ?>").click(function() {
        		$("#review-<?php echo $row_reviews['cid']; ?>").hide();
        		$("#divActionButtons-<?php echo $row_reviews['cid']; ?>").hide();
        		$("#frmEditReview-<?php echo $row_reviews['cid']; ?>").show();
        	});
        	$("#btnEditReview-<?php echo $row_reviews['cid']; ?>").click(function(e) {
        		$.ajax({
        			type: "POST",
        			url: "update_review.php",
        			data: $("#frmEditReview-<?php echo $row_reviews['cid']; ?>").serialize(),
        			success: function(data) {
        			    $("#review-<?php echo $row_reviews['cid']; ?>").show();
        			    $("#divActionButtons-<?php echo $row_reviews['cid']; ?>").show();
        			    $("#frmEditReview-<?php echo $row_reviews['cid']; ?>").hide();
        				$("#review-<?php echo $row_reviews['cid']; ?>").html(data);
        			}
        		});
        		e.preventDefault();
        	});
        </script>

    	<?php } ?>
	</div>
</div>
<br>
<?php } ?>
<?php $conn = null; ?>