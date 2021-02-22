<?php 
//edit di resolved
$nm_inquiry=$_POST['nm_inquiry'];
$id_inquiry=$_POST['id_inquiry'];
$sql = "UPDATE inquiry SET nm_inquiry='$nm_inquiry' WHERE id_inquiry='$id_inquiry'";

 date_default_timezone_set('Asia/Jakarta');
 $table="channel";
 $action="add";
 $nama=$_SESSION['id'];
 $waktu=date("Y-m-d h:i:s");

$sql2 = "INSERT INTO `log`(`table`, `action`, `waktu`, `user`) VALUES ('Inquiry','Update','$waktu','$nama')";
mysqli_query($conn,$sql2);

if (mysqli_query($conn, $sql)) {
      echo "<script>alert('updated successfully');history.go(-1);</script>";
          } else{
      echo "<script>alert('Error');history.go(-1);</script>";
}

$conn->close();


?>