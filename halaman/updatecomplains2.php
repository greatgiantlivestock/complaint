<?php
$id=$_SESSION["id"];
$id_customer=$_POST['id_customer'];
$id_matgr=$_POST['id_matgr'];
// $id_reason=$_POST['id_reason'];
$id_portal=$_POST['id_portal'];
$desc_comp=$_POST['desc_comp'];
$id_cat=$_POST['id_cat'];
$id_product=$_POST['id_product'];
$name_store=$_POST['name_store'];
$id_cat_comp=$_POST['id_cat_comp'];
$id_type=$_POST['id_type'];
$name=$_POST['name'];
$address=$_POST['address'];
$telp=$_POST['telp'];
$datecomp=$_POST['datecomp'];
$datecomp1=date ("Y-m-d",strtotime($datecomp));
$datepurchase=$_POST['datepurchase'];
$datepurchase1=date ("Y-m-d",strtotime($datepurchase));
$dateopening=$_POST['dateopening'];
$dateopening1=date ("Y-m-d",strtotime($dateopening));
if($dateopening==''){
 $dateopening1='';
}
$datedefect=$_POST['datedefect'];
$datedefect1=date ("Y-m-d",strtotime($datedefect));
if($datedefect==''){
 $datedefect1='';
}
$batch=$_POST['batch'];
$expdate=$_POST['expdate'];
$expdate1=date ("Y-m-d",strtotime($expdate));
$packing_time=$_POST['packing_time'];
$amount=$_POST['amount'];
$uom=$_POST['uom'];
$id_level=$_POST['id_level'];
	if($datecomp<>''){
	   $idbulan=date ("Y-m-d",strtotime($datecomp));
	   $bulan=explode("-",$idbulan);
	   $idbulan;
		$tahun= $bulan['0'];
		$bulan=$bulan['1'];
	}else{
		$bulan='';
	}
date_default_timezone_set('Asia/Jakarta');
$iduser=$_SESSION['id'];
$user=$_SESSION['nama'];

 $sql = "UPDATE mst_complaint SET 
		 edit_by='$user',
		 id_bulan='$bulan',
		 id_matgr='$id_matgr',
		 id_portal='$id_portal',
		 id_cat='$id_cat',
		 id_product='$id_product',
		 name_store='$name_store',
		 id_cat_comp='$id_cat_comp',
		 id_type='$id_type',
		 name='$name',
		 address='$address',
		 telp='$telp',
		 datecomp='$datecomp1',
		 datepurchase='$datepurchase1',
		 dateopening='$dateopening1',
		 datedefect='$datedefect1',
		 batch='$batch',
		 desc_comp='$desc_comp',
		 expdate='$expdate1',
		 packing_time='$packing_time',
		 amount='$amount',
		 uom='$uom',
		 id_level='$id_level'
 WHERE id_customer='$id_customer'";

$nama=$_SESSION['id'];
$waktu=date("Y-m-d h:i:s");

$sql2 = "INSERT INTO `log`(`table`, `action`, `waktu`, `user`) VALUES ('mst_complaint','Update','$waktu','$nama')";
mysqli_query($conn,$sql2);
if (mysqli_query($conn, $sql)) {
      echo "<script>alert('updated successfully');history.go(-2);</script>";
          } else{
      echo "<script>alert('Error');history.go(-1);</script>";
}

$conn->close();
?>