<?php
$servername = "localhost";
$username = "homt3248_ms";
$password = "moha11mmad";
$dbname = "homt3248_complaint1";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>