<?php
function setComments($conn) {
    if (isset($_POST['commentSubmit'])) {
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $cPic = $_POST['cPic'];
        $messsage = $_POST['message'];
        $sql = "INSERT INTO review (uid, date, cPic, message) VALUES ('$uid', '$date','$cPic','$messsage')";
        $result = $conn->query($sql);
    }
    
}
function getComments($conn) {
    $sql = "SELECT * FROM review";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<div class='comment-box'><p>";
            echo $row['uid']."<br>";
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