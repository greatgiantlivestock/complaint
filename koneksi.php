<?php
$servername = "localhost";
$username = "gred3696_ms3";
$password = "moha11mmad";
$dbname = "gred3696_complaint";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>