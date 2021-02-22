<?php 
//edit di resolved
$id=$_SESSION["id"];
$idcustomer=$_POST['idcustomer'];
$feedback=$_POST['feedback'];
$Penanganan=$_POST['Penanganan'];
$resolved=$_POST['resolved'];
$date_solved=$_POST['date_solved'];


$sql = "UPDATE complainusers SET resolved='$resolved',Penanganan='$Penanganan',feedback='$feedback',user1='$id',date_solved='$date_solved' WHERE idcustomer='$idcustomer'";
 date_default_timezone_set('Asia/Jakarta');
 $table="complain";
 $action="add";
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