<?php 
//edit di resolved
$idchannel=$_POST['idchannel'];
$nm_channel=$_POST['nm_channel'];
$sql = "UPDATE channel SET nm_channel='$nm_channel' WHERE idchannel='$idchannel'";

 date_default_timezone_set('Asia/Jakarta');
 $table="channel";
 $action="add";
$nama=$_SESSION['id'];
 $waktu=date("Y-m-d h:i:s");

$sql2 = "INSERT INTO `log`(`table`, `action`, `waktu`, `user`) VALUES ('Channel','Update','$waktu','$nama')";
mysqli_query($conn,$sql2);

if (mysqli_query($conn, $sql)) {
      echo "<script>alert('updated successfully');history.go(-1);</script>";
          } else{
      echo "<script>alert('Error');history.go(-1);</script>";
}

$conn->close();


?>