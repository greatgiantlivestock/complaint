<?php 
//edit di resolved
$id_impression=$_POST['id_impression'];
$nm_impression=$_POST['nm_impression'];



$sql = "UPDATE impression SET nm_impression='$nm_impression' WHERE id_impression='$id_impression'";

 date_default_timezone_set('Asia/Jakarta');
 $table="channel";
 $action="add";
$nama=$_SESSION['id'];
 $waktu=date("Y-m-d h:i:s");

$sql2 = "INSERT INTO `log`(`table`, `action`, `waktu`, `user`) VALUES ('Impression','Update','$waktu','$nama')";
mysqli_query($conn,$sql2);

if (mysqli_query($conn, $sql)) {
      echo "<script>alert('updated successfully');history.go(-1);</script>";
          } else{
      echo "<script>alert('Error');history.go(-1);</script>";
}

$conn->close();


?>