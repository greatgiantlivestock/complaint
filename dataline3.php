<?php
$con=mysqli_connect("localhost","root","","complaints");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

$tahun=$_GET['tahun'];
// Data for Sugar
// $query = mysqli_query($con,"SELECT bulan.namabulan, COUNT(complainusers.idbulan) AS jumlah FROM complainusers RIGHT JOIN bulan ON complainusers.idbulan = bulan.idbulan GROUP BY namabulan where bulan='07'");
$query = mysqli_query($con,"SELECT complainusers.tahun, COUNT(complainusers.tahun) AS jumlah FROM complainusers where complainusers.tahun='2017' GROUP BY tahun");


$rows = array();
$rows['tahun'] = 'bulan';
while($tmp= mysqli_fetch_array($query)) {
    $rows['data'][] = $tmp['jumlah'];
}

// Data for Rice
$result = array();
array_push($result,$rows);
print json_encode($result, JSON_NUMERIC_CHECK);

mysqli_close($con);
?> 


