
<?php

// $idstore=$_POST['idstore'];
$store_code=$_POST['store_code'];
$address=$_POST['address'];
$store=$_POST['store'];
$search_term=$_POST['search_term'];
$city=$_POST['city'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql ="INSERT INTO `store3`(`customer`, `name`, `city`, `street`, `search_term`) VALUES ('$store_code','$store', '$city','$address','$search_term')";

 date_default_timezone_set('Asia/Jakarta');
 $table="channel";
 $action="add";
 $nama=$_SESSION['id'];
 $waktu=date("Y-m-d h:i:s");

$sql2 = "INSERT INTO `log`(`table`, `action`, `waktu`, `user`) VALUES ('Store','Add','$waktu','$nama')";
mysqli_query($conn,$sql2);

if (mysqli_query($conn, $sql))
 {
//       echo "ccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc";
//   }else{
// echo "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
// echo $sql;
  
     echo "<script>alert('New record created successfully');history.go(-1);</script>";
          } else{
      echo "<script>alert('Gagal');history.go(-1);</script>";
   

} 

mysqli_close($conn);
?>
