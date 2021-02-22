
<?php
$nm_impression=$_POST['impression'];
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO impression(nm_impression) VALUES ('$nm_impression')";

 date_default_timezone_set('Asia/Jakarta');
 $table="channel";
 $action="add";
 $user="1";
 $waktu=date("Y-m-d h:i:s");
 $nama=$_SESSION['id'];

$sql2 = "INSERT INTO `log`(`table`, `action`, `waktu`, `user`) VALUES ('Impression','Add','$waktu','$nama')";
mysqli_query($conn,$sql2);
if (mysqli_query($conn, $sql)) {
       echo "<script>alert('New record created successfully');history.go(-1);</script>";
          } else{
      echo "<script>alert('Error');history.go(-1);</script>";
}

mysqli_close($conn);
?>
