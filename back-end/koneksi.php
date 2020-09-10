<?php
    date_default_timezone_set('Asia/Jakarta');
    $mysqli = new mysqli("localhost","root","","aplikasi");
    // Check connection
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
     exit();
    }

?>