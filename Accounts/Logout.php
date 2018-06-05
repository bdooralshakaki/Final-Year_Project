<?php
 session_start();
 session_destroy();
 include '../Database/dbconnect.php';
 header("location: ../index.php");
 exit();
 ?>