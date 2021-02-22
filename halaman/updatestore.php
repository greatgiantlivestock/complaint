<?php 
//edit di resolved

$id=$_POST['id'];
$store_code=$_POST['store_code'];
$store=$_POST['store'];
$alamat=$_POST['alamat'];
$search_term=$_POST['search_term'];
$city=$_POST['city'];


 date_default_timezone_set('Asia/Jakarta');
 $table="channel";
 $action="add";
 $nama=$_SESSION['id'];
 $waktu=date("Y-m-d h:i:s");

$sql2 = "INSERT INTO `log`(`table`, `action`, `waktu`, `user`) VALUES ('Store','Update','$waktu','$nama')";
mysqli_query($conn,$sql2);

$sql = "UPDATE store3 SET customer='$store_code',name='$store',street='$alamat',search_term='$search_term',city='$city' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
      echo "<script>alert('updated successfully');history.go(-1);</script>";
          } else{
      echo "<script>alert('Error');history.go(-1);</script>";
	// echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
 // }else{
 // 	echo "bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb";
 // 	echo $sql;
    

 }


$conn->close();


?>