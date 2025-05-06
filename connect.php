<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $nama_db = "sipeo";
    
    $conn = mysqli_connect($server, $user, $pass, $nama_db) or die(mysqli_error($conn));
?>