<?php

$conn = mysqli_connect('localhost', 'root', '', 'ccs');

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

?>