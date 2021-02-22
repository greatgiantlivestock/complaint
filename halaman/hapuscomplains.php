<?php 

$idcustomer=$_POST['id_customer'];

$sql = "DELETE FROM  mst_complaint where id_customer='$idcustomer'";

if ($conn->query($sql) === TRUE) {

 date_default_timezone_set('Asia/Jakarta');
 $nama=$_SESSION['id'];
 $waktu=date("Y-m-d h:i:s");

$sql2 = "INSERT INTO `log`(`table`, `action`, `waktu`, `user`) VALUES ('mst_complaint','Delete','$waktu','$nama')";
mysqli_query($conn,$sql2);

 echo "<script>alert('Delete successfully');history.go(-2);</script>";
          } else{
      echo "<script>alert('Error');history.go(-2);</script>";
}

$conn->close();

?>
