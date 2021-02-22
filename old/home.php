<?php 
session_start();
include "koneksi.php";
$a=$_SESSION["username"];
if($a==""){
    header('location:index.php');   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Great Giant Livestock</title>
    <link href='icon.jpg' rel='shortcut icon'>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
</head>
<body> <!-- mencoba testing -->
    <style type="text/css">
@media only screen and (max-width: 411px) {
   div.header2:before {
   content:url(header360.png);
    }
}
@media only screen and (min-width: 412px) and (max-width: 599px) {
   div.header2:before {
   content:url(header412.png);
    }
}
@media only screen and (max-width: 638px) and (min-width: 600px){
     div.header2:before {
     content:url(header640.png);
   
    }
}
@media only screen and (max-width: 729px) and (min-width: 639px){
     div.header2:before {
     content:url(header640.png);
   
    }
}
@media only screen and (max-width: 735px) and (min-width: 730px){
     div.header2:before {
     content:url(header732.png);
   
    }
}
@media only screen and (max-width: 765px) and (min-width: 736px){
     div.header2:before {
     content:url(header736.png);
   
    }
}
@media only screen and (max-width: 786px) and (min-width: 766px){
     div.header2:before {
     content:url(header768.png);
   
    }
}
@media only screen and (max-width: 812px) and (min-width: 785px){
     div.header2:before {
     content:url(header812.png);
   
    }
}
@media only screen and (max-width: 1024px) and (min-width: 813px){
     div.header2:before {
     content:url(header1024.png);
   
    }
}
@media only screen and  (max-width:1152px) and (min-width: 1023px){
    div.header2:before {
   content:url(header1152.png);
    }
}
@media only screen and (max-width: 1280px)and (min-width: 1152px){
    div.header2:before {
   content:url(header1280.png);
    }
}
@media only screen and (max-width: 1360px)and (min-width: 1279px){
    div.header2:before {
   content:url(header1360.png);
    }
}
@media only screen and (max-width: 1366px)and (min-width: 1361px){
    div.header2:before {
   content:url(header13662.png);
    }
}
@media only screen and (max-width: 1824px) and (min-width: 1367px){
    div.header2:before {
    content:url(header1796.png);
    }
}
@media only screen and  (min-width: 1824px){
    div.header2:before {
    content:url(header4000.png);
    }
}
</style>
    <div class="header2"></div>
    <div id="wrapper">
       <?php include "header.php";?>
    </div>
    <script src="jquery-1.10.1.min.js"></script>
    <script src="highcharts.js"></script>
   <!-- css grafik end -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="vendor/raphael/raphael.min.js"></script>
  <!--   <script src="vendor/morrisjs/morris.min.js"></script> -->
    <script src="data/morris-data.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>
    <script src="Chart.bundle.js"></script>
   <!--  /* css tambahan */ -->
    <style type="text/css">
        

    </style>
	<?php 
	if(isset($_GET['page']))
    {
		$page = $_GET['page'];
		switch ($page) {
			case 'home':
				include "home2.php";
				break;
			case 'city':
				include "halaman/city.php";
				break;
            case 'simpancity':
                include "halaman/simpancity.php";
                break;  
            case 'store':
                include "halaman/store.php";
                break;
            case 'addstore':
                include "halaman/addstore.php";
                break;
            case 'simpanstore':
                include "halaman/simpanstore.php";
                break; 
            case 'area':
                include "halaman/area.php";
                break;
            case 'updateinquiry':
                include "halaman/updateinquiry.php";
                break;
            case 'simpanarea':
                include "halaman/simpanarea.php";
                break;
            case 'Complaint':
                include "halaman/complains.php";
                break;
            case 'addcomplains':
                include "halaman/addcomplains.php";
                break;
            case 'reportview':
                include "halaman/reportview.php";
                break;
            case 'updatecomplains':
                include "halaman/updatecomplains.php";
                break;
            case 'hapuscomplainsview':
                include "halaman/hapuscomplainsview.php";
                break;
            case 'updatetipe':
                include "halaman/updatetipe.php";
                break;
            case 'editcity':
                include "halaman/editcity.php";
                break;
            case 'updateproduk':
                include "halaman/updateproduk.php";
                break;
            case 'updatecity':
                include "halaman/updatecity.php";
                break;
            case 'updatestore':
                include "halaman/updatestore.php";
                break;
             case 'updateportal':
                include "halaman/updateportal.php";
                break;
             case 'updatearea':
                include "halaman/updatearea.php";
                break;
            case 'updatecomplains2':
                include "halaman/updatecomplains2.php";
                break;
            case 'updatechannel':
                include "halaman/updatechannel.php";
                break;
            case 'simpancomplains':
                include "halaman/simpancomplains.php";
                break;
            case 'editcomplains':
                include "halaman/editcomplains.php";
                break;     
            case 'dasbord':
                include "halaman/dasbord.php";
                break; 
             case 'login':
                include "halaman/login.php";
                break;  
            case 'proseslogin':
                include "halaman/proseslogin.php";
                break;  
            case 'export':
                include "halaman/export.php";
                break;
            case 'portal':
                include "halaman/portal.php";
                break; 
            case 'simpanchannel':
                include "halaman/simpanchannel.php";
                break; 
            case 'simpantipecomplain':
                include "halaman/simpantipecomplain.php";
                break; 
            case 'simpaninquiry':
                include "halaman/simpaninquiry.php";
                break;
            case 'simpanproduk':
                include "halaman/simpanproduk.php";
                break; 
            case 'simpanportal':
                include "halaman/simpanportal.php";
                break; 
            case 'tipecomplain':
                include "halaman/tipecomplain.php";
                break; 
            case 'channel':
                include "halaman/channel.php";
                break; 
            case 'produk':
                include "halaman/produk.php";
                break; 
            case 'inquiry':
                include "halaman/inquiry.php";
                break; 
            case 'proses_kota':
                include "halaman/proses_kota.php";
                break;
            case 'deletearea':
                include "halaman/deletearea.php";
                break;
            case 'deleteproduk':
                include "halaman/deleteproduk.php";
                break;
            case 'deletekota':
                include "halaman/deletekota.php";
                break; 
            case 'deletestore':
                include "halaman/deletestore.php";
                break;
            case 'deletechannel':
                include "halaman/deletechannel.php";
                break;
            case 'deleteportal':
                include "halaman/deleteportal.php";
                break;
             case 'deleteinquiry':
                include "halaman/deleteinquiry.php";
                break;
            case 'deletetipecomplain':
                include "halaman/deletetipecomplain.php";
                break;     
            case 'dasbord2':
                include "halaman/dasbord2.php";
                break; 
            case 'hapuscomplains':
                include "halaman/hapuscomplains.php";
                break; 
            case 'po':
                include "halaman/po.php";
                break; 
            case 'upload':
                include "halaman/upload.php";
                break;
            case 'exportexcell':
                include "halaman/exportexcell.php";
                break;
                // terbaru 
            case 'produkreview':
                include "halaman/produkreview.php";
                break; 
            case 'productdev':
                include "halaman/productdev.php";
                break; 
            case 'impression':
                include "halaman/impression.php";
                break; 
            case 'simpanreview':
                include "halaman/simpanreview.php";
                break;
            case 'deletereview':
                include "halaman/deletereview.php";
                break;
            case 'updatereview':
                include "halaman/updatereview.php";
                break;
            case 'simpanimpression':
                include "halaman/simpanimpression.php";
                break;
            case 'updateimpression':
                include "halaman/updateimpression.php";
                break;
             case 'deleteimpression':
                include "halaman/deleteimpression.php";
                break;
             case 'simpanprodukdev':
                include "halaman/simpanprodukdev.php";
                break;
              case 'updateprodukdev':
                include "halaman/updateprodukdev.php";
                break;
            case 'deleteprodukdev':
                include "halaman/deleteprodukdev.php";
                break;

            case 'log':
                include "halaman/log.php";
                break;              
                            
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
	            }
	}
    else
    {
		include "home2.php";
	}

	 ?>

	
