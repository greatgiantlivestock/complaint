<?php
 $id=$_SESSION["id"];
 $idcustomer=$_POST['idcustomer'];
 $id_portal=$_POST['id_portal'];
 $tanggal=$_POST['tanggal'];
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $telp=$_POST['telp'];
 $idkota=$_POST['idkota'];
 $idarea=$_POST['idarea'];
 $idchannel=$_POST['idchannel'];
 $idstore=$_POST['idstore'];
 $idtipecomplain=$_POST['idtipecomplain'];
 $typeproduk=$_POST['typeproduk'];
 $expdate=$_POST['expdate'];
 $expdate2=date ("Y-m-d",strtotime($expdate));
 $batch=$_POST['batch'];
 $batch2=date ("Y-m-d",strtotime($batch));
 $packing_time=$_POST['packing_time'];

 $datapurcase=$_POST['datapurcase'];

 $datapurcase2=date ("Y-m-d",strtotime($datapurcase));

 $komen=$_POST['komen'];
//  $productreview=$_POST['productreview'];
//  $impression=$_POST['impression'];
//  $Productdev=$_POST['Productdev'];
//  $inquiry=$_POST['inquiry'];
 $level=$_POST['id_level'];
//  $comment=$_POST['comment'];
 //
 $storelocation=$_POST['storelocation'];

 $dateopening=$_POST['dateopening'];
 $dateopening2=date ("Y-m-d",strtotime($dateopening));

 $datedefect=$_POST['datedefect'];
 $datedefect2=date ("Y-m-d",strtotime($datedefect));

//  $datereplace=$_POST['datereplace'];
//  $datereplace2=date ("Y-m-d",strtotime($datereplace));



 if($tanggal<>'')
 {
    $idbulan=date ("Y-m-d",strtotime($tanggal));
    $bulan=explode("-",$idbulan);
    $idbulan;
 	$tahun= $bulan['0'];
 	$bulan=$bulan['1'];
 }
 else
 {
 	$bulan='';
 }
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 

 date_default_timezone_set('Asia/Jakarta');
 $table="channel";
 $action="add";
 $iduser=$_SESSION['id'];
 $waktu=date("Y-m-d h:i:s");

$sql2 = "INSERT INTO `log`(`table`, `action`, `waktu`, `user`) VALUES ('Complaint','Add','$waktu','$iduser')";
mysqli_query($conn,$sql2);

$sql = "INSERT INTO complainusers(idcustomer,id_portal,tanggal,nama,alamat,telp,idkota,idarea,id_channel,idstore,id_tipecomplains,id_produk,expdate,batch,packing_time,datapurcase,
komen,id_level,user,resolved,idbulan,storelocation,dateopening,datedefect) VALUES 
('$idcustomer','$id_portal','$idbulan','$nama','$alamat','$telp','$idkota','$idarea','$idchannel','$idstore','$idtipecomplain','$typeproduk','$expdate2','$batch2','$packing_time',
'$datapurcase2','$komen','$level','$id','Pending','$bulan','$storelocation','$dateopening2',
'$datedefect2')";

if (mysqli_query($conn, $sql)) {
       echo "<script>alert('New record created successfully');history.go(-2);</script>";
          } else{
      echo "<script>alert('Error');history.go(-1);</script>";
  }
// 	echo "<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."INSERT INTO complainusers(idcustomer,id_portal,tanggal,nama,alamat,telp,idkota,idarea,id_channel,idstore,id_tipecomplains,id_produk,expdate,datapurcase,komen,id_productreview,id_impression,id_productdev,id_inquiry,comment,user,resolved,idbulan,storelocation,dateopening,datedefect,datereplace) VALUES ('$idcustomer','$id_portal','$idbulan','$nama','$alamat','$telp','$idkota','$idarea','$idchannel','$idstore','$idtipecomplain','$typeproduk','$expdate2','$datapurcase2','$komen','$productreview','$impression','$Productdev','$inquiry','$comment','$id','tidak','$bulan','$storelocation','$dateopening2','$datedefect2','$datereplace2')";
// }else{
// echo "<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."INSERT INTO complainusers(idcustomer,id_portal,tanggal,nama,alamat,telp,idkota,idarea,id_channel,idstore,id_tipecomplains,id_produk,expdate,datapurcase,komen,id_productreview,id_impression,id_productdev,id_inquiry,comment,user,resolved,idbulan,storelocation,dateopening,datedefect,datereplace) VALUES ('$idcustomer','$id_portal','$idbulan','$nama','$alamat','$telp','$idkota','$idarea','$idchannel','$idstore','$idtipecomplain','$typeproduk','$expdate2','$datapurcase2','$komen','$productreview','$impression','$Productdev','$inquiry','$comment','$id','tidak','$bulan','$storelocation','$dateopening2','$datedefect2','$datereplace2')";

// }

 mysqli_close($conn);
?>