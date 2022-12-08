<?php
$servername = "db";
$database = "db_student";
$username = "root";
$password = "1234";
 
    // Create connection
 
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_query($conn, "SET NAMES 'utf8'");
 
// Check connection
 
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error($conn));
 
}
// echo "Connected successfully";
// mysqli_close($conn);
?>
    

