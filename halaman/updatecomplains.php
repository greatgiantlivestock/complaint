<?php 
//edit di resolved
$id=$_SESSION["nama"];
$idcustomer=$_POST['idcustomer'];
$id_cat_comp=$_POST['id_cat_comp'];
// $feedback=$_POST['feedback'];
$Penanganan=$_POST['penanganan'];
$resolved=$_POST['resolved'];
$status=$_POST['status'];
$date_solved=$_POST['date_solved'];


$sql = "UPDATE mst_complaint SET status='$resolved',keterangan='$status',action='$Penanganan',id_cat_comp='$id_cat_comp',review_by='$id',dateclose='$date_solved' WHERE id_customer='$idcustomer'";
 date_default_timezone_set('Asia/Jakarta');
$nama=$_SESSION['id'];
 $waktu=date("Y-m-d h:i:s");

$sql2 = "INSERT INTO `log`(`table`, `action`, `waktu`, `user`) VALUES ('Complaint Solving','Update','$waktu','$nama')";
mysqli_query($conn,$sql2);

if (mysqli_query($conn, $sql)) {
      echo "<script>alert('updated successfully');history.go(-1);</script>";
          } else{
      echo "<script>alert('Error');history.go(-1);</script>";
}

$conn->close();


?>