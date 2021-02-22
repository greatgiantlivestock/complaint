<?php
 $id=$_SESSION["id"];
 $id_customer=$_POST['id_customer'];
//  $id_reason=$_POST['id_reason'];
 $id_matgr=$_POST['id_matgr'];
 $id_portal=$_POST['id_portal'];
 $id_cat=$_POST['id_cat'];
 $id_product=$_POST['id_product'];
 $name_store=$_POST['name_store'];
 $desc_comp=$_POST['desc_comp'];
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

    //  $id_portal=$_POST['id_portal'];
    //  $tanggal=$_POST['tanggal'];
    //  $nama=$_POST['nama'];
    //  $alamat=$_POST['alamat'];
    //  $telp=$_POST['telp'];
    //  $idkota=$_POST['idkota'];
    //  $idarea=$_POST['idarea'];
    //  $idchannel=$_POST['idchannel'];
    //  $idstore=$_POST['idstore'];
    //  $idtipecomplain=$_POST['idtipecomplain'];
    //  $typeproduk=$_POST['typeproduk'];
    //  $expdate=$_POST['expdate'];
    //  $expdate2=date ("Y-m-d",strtotime($expdate));
    //  $batch=$_POST['batch'];
    //  $batch2=date ("Y-m-d",strtotime($batch));
    //  $packing_time=$_POST['packing_time'];
    //  $datapurcase=$_POST['datapurcase'];
    //  $datapurcase2=date ("Y-m-d",strtotime($datapurcase));
    //  $komen=$_POST['komen'];
    //  $productreview=$_POST['productreview'];
    //  $impression=$_POST['impression'];
    //  $Productdev=$_POST['Productdev'];
    //  $inquiry=$_POST['inquiry'];
    //  $level=$_POST['id_level'];
    //  $comment=$_POST['comment'];
    //  $storelocation=$_POST['storelocation'];
    //  $dateopening=$_POST['dateopening'];
    //  $dateopening2=date ("Y-m-d",strtotime($dateopening));
    //  $datedefect=$_POST['datedefect'];
    //  $datedefect2=date ("Y-m-d",strtotime($datedefect));
    //  $datereplace=$_POST['datereplace'];
    //  $datereplace2=date ("Y-m-d",strtotime($datereplace));

     if($datecomp<>''){
        $idbulan=date ("Y-m-d",strtotime($datecomp));
        $bulan=explode("-",$idbulan);
        $idbulan;
     	$tahun= $bulan['0'];
     	$bulan=$bulan['1'];
     }else{
     	$bulan='';
     }

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
date_default_timezone_set('Asia/Jakarta');
$iduser=$_SESSION['id'];
$user=$_SESSION['nama'];
// $datecomp=date("Y-m-d h:i:s");

$sql2 = "INSERT INTO `log`(`table`, `action`, `waktu`, `user`) VALUES ('Complaint','Add','$waktu','$iduser')";
mysqli_query($conn,$sql2);

$sql = "INSERT INTO mst_complaint(id_customer,created_by,id_bulan,id_matgr,id_portal,id_cat,id_product,name_store,id_type,name,address,telp,datecomp,datepurchase,dateopening,datedefect,batch,expdate,packing_time,amount,uom,review_by,id_level,action,status,dateclose,keterangan,desc_comp) VALUES 
('$id_customer','$user',$bulan,'$id_matgr','$id_portal','$id_cat','$id_product','$name_store','$id_type','$name','$address','$telp','$datecomp1','$datepurchase1','$dateopening1','$datedefect1','$batch','$expdate1','$packing_time','$amount','$uom','','$id_level','','Pending','','Not Defined','$desc_comp')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('New record created successfully');history.go(-2);</script>";
        include "email/mail.php";
        header("Location: https://complaint.greatgiantlivestock.com/home.php?page=Complaint");
        die();
    } else{
        echo "<script>alert('Error');history.go(-1);</script>";
    }

 mysqli_close($conn);
?>