<?php 
session_start();
include "koneksi.php";
$a=$_SESSION["username"];
// if($a==""){
//     header('location:index.php');   
// }
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
    <link href="dist/css/sb-admin-3.css" rel="stylesheet">
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
            case 'Review':
                include "halaman/Complaint_review.php";
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

	
