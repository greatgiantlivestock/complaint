
<?php

// $idstore=$_POST['idstore'];
$nm_komlain=$_POST['nm_komlain'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO tipecomplain(nm_tipecomplain) VALUES ('$nm_komlain')";

 date_default_timezone_set('Asia/Jakarta');
 $table="channel";
 $action="add";
 $nama=$_SESSION['id'];
 $waktu=date("Y-m-d h:i:s");

$sql2 = "INSERT INTO `log`(`table`, `action`, `waktu`, `user`) VALUES ('Type Complaint','Add','$waktu','$nama')";
mysqli_query($conn,$sql2);

if (mysqli_query($conn, $sql)) {
       echo "<script>alert('New record created successfully');history.go(-1);</script>";
          } else{
      echo "<script>alert('Error');history.go(-1);</script>";
}

mysqli_close($conn);
?>