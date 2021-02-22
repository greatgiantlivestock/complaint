<?php 
//edit di resolved
$id=$_POST['id'];
$nm_tipecomplain=$_POST['nm_tipecomplain'];
$sql = "UPDATE tipecomplain SET nm_tipecomplain='$nm_tipecomplain' WHERE id='$id'";

 date_default_timezone_set('Asia/Jakarta');
 $table="channel";
 $action="add";
 $nama=$_SESSION['id'];
 $waktu=date("Y-m-d h:i:s");

$sql2 = "INSERT INTO `log`(`table`, `action`, `waktu`, `user`) VALUES ('Type Complaint','Update','$waktu','$nama')";
mysqli_query($conn,$sql2);

if (mysqli_query($conn, $sql)) {
      echo "<script>alert('updated successfully');history.go(-1);</script>";
          } else{
      echo "<script>alert('Error');history.go(-1);</script>";
}

$conn->close();


?>