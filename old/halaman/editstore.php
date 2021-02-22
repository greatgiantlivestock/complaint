<?php 
//edit di resolved
$idstore=$_POST['idstore'];

$sql = "UPDATE store SET namastore='$namastore' WHERE idstore='$idstore'";

 date_default_timezone_set('Asia/Jakarta');
 $table="channel";
 $action="add";
 $nama=$_SESSION['id'];
 $waktu=date("Y-m-d h:i:s");

$sql2 = "INSERT INTO `log`(`table`, `action`, `waktu`, `user`) VALUES ('store','update','$waktu','$nama')";
mysqli_query($conn,$sql2);

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


?>