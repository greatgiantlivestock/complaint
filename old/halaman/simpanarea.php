<?php
// $idarea=$_POST['idarea'];
$namaarea=$_POST['namaarea'];
$idkota=$_POST['idkota'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO area(namaarea,idkota) VALUES ('$namaarea','$idkota')";

 date_default_timezone_set('Asia/Jakarta');
 $table="channel";
 $action="add";
 $nama=$_SESSION['id'];
 $waktu=date("Y-m-d h:i:s");

$sql2 = "INSERT INTO `log`(`table`, `action`, `waktu`, `user`) VALUES ('Area','Add','$waktu','$nama')";
mysqli_query($conn,$sql2);


if (mysqli_query($conn, $sql)) {
       echo "<script>alert('New record created successfully');history.go(-1);</script>";
          } else{
      echo "<script>alert('Error');history.go(-1);</script>";
}
mysqli_close($conn);
?>