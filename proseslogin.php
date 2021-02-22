<?php
include "koneksi.php";

$username = $_POST['username'];
$pass     = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password='$pass'");
$row=mysqli_fetch_array($login);

 if ($row['username'] == $username AND $row['password'] == $pass)
 {
   session_start();
   $_SESSION['username'] = $row['username'];
   $_SESSION['nama'] = $row['nama'];
   $_SESSION['password'] = $row['password'];
   $_SESSION['id'] = $row['id'];
   header('location:home.php');
 }
 else
 {
 	header('location:index.php');	
 }
?>
