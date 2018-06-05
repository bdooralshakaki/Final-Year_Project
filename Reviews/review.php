
<?php
 ob_start();
 session_start();
    include '../Accounts/Header.php';
    include '../Database/dbconnect.php';
    include 'dbConnect.php';
    include 'comments.link.php';
    
    date_default_timezone_set('Europe/Ireland');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Review </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </br>
    <h1 style="text-align:center;">Reviews</h1>
</head>

<body>

    <div align="center">
        <?php
        echo "<form method='POST' action='".setComments($conn)."'>
        <div align='enter'>
             <div class='row'>
                    <div class='col-md-4' style='float: none;
                         margin: 0 auto'>
                            <div class='form-group'>
                                <label> colleges List</label>
                                <center><select class='form-control' name='cPic'>
                                    <option value='Natinal college of Ireland'> NCI</option>
                                    <option value='Dublin institute of technology'>DIT</option>
                                    <option value='University College Dublin '> UCD </option>
                                    <option value='Trinity College'>TCD</option>
                                    <option value='Dublin City University'>DCU</option>
                                    <option value='Maynooth University'>Maynooth University</option>
                                </select></center>
                            </div>
                    </div>
                </div>
            <input type='hidden' name='uid' value='Anonymous'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea name='message'></textarea><br>
            <button type='submit' name='commentSubmit'> Submit Review </button>
        </form>";
        getComments($conn);
        
        $cPic = $_POST['cPic'];
        ?>
    </div>
    
    </br>
<footer class="py-3 bg-dark">
                  <div class="container">
                    <p class="m-0 text-center text-light">Copyright &copy; College C&S 2018</p>
                  </div>
            </footer>


</body>
</html>





