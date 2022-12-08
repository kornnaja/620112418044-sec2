<?php
    $host = "localhost";
    $user ="root";
    $pass ="1234";
    $db = "db_student";
    mysqli_connect($host,$user,$pass,$db);
    // mysqli_query($link,"SET NAMES 'utf8'");
    $conn = mysqli_connect("db","root","1234","db_student");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } 
?>
