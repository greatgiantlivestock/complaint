<?php
 $id_portal=$_POST['id_portal'];
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
 $datapurcase=$_POST['datapurcase'];
 $komen=$_POST['komen'];
 $productreview=$_POST['productreview'];
 $impression=$_POST['impression'];
 $Productdev=$_POST['Productdev'];
 $inquiry=$_POST['inquiry'];
 $comment=$_POST['comment'];
 $idcustomer=$_POST['idcustomer'];
 $batch=$_POST['batch'];
 $batch2=date ("Y-m-d",strtotime($batch));
 $packing_time=$_POST['packing_time'];

 $storelocation=$_POST['storelocation'];

 $tanggal=$_POST['tanggal'];
 $tanggal2=date ("Y-m-d",strtotime($tanggal));

 $expdate=$_POST['expdate'];
 $expdate2=date ("Y-m-d",strtotime($expdate));

 $datapurcase=$_POST['datapurcase'];
 $datapurcase2=date ("Y-m-d",strtotime($datapurcase));

 $dateopening=$_POST['dateopening'];
 $dateopening2=date ("Y-m-d",strtotime($dateopening));

 $datedefect=$_POST['datedefect'];
 $datedefect2=date ("Y-m-d",strtotime($datedefect));

 $datereplace=$_POST['datereplace'];
 $datereplace2=date ("Y-m-d",strtotime($datereplace));


// echo "<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>";
 $sql = "UPDATE complainusers SET 
		 id_portal='$id_portal',
		 tanggal='$tanggal2',
		 nama='$nama',
		 alamat='$alamat',
		 telp='$telp',
		 idkota='$idkota',
		 idarea='$idarea',
		 id_channel='$idchannel',
		 idstore='$idstore',
		 id_tipecomplains='$idtipecomplain',
		 id_produk='$typeproduk',
		 expdate='$expdate2',
		 batch='$batch2',
		 packing_time='$packing_time',
		 datapurcase='$datapurcase2',
		 komen='$komen',
		 id_productreview='$productreview',
		 id_impression='$impression',
		 id_productdev='$Productdev',
		 id_inquiry='$inquiry',
		 storelocation='$storelocation',
		 dateopening='$dateopening2',
		 datedefect='$datedefect2',
		 datereplace='$datereplace2',

		 comment='$comment'
 WHERE idcustomer='$idcustomer'";
 $table="channel";
 $action="add";
$nama=$_SESSION['id'];
 $waktu=date("Y-m-d h:i:s");

$sql2 = "INSERT INTO `log`(`table`, `action`, `waktu`, `user`) VALUES ('Complaint','Update','$waktu','$nama')";
mysqli_query($conn,$sql2);
if (mysqli_query($conn, $sql)) {
      echo "<script>alert('updated successfully');history.go(-2);</script>";
          } else{
      echo "<script>alert('Error');history.go(-1);</script>";
}

$conn->close();
?>