<?php
$con=mysqli_connect("localhost","root","","complaints");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

$bulan=$_GET["tahun"];
// Data for Sugar
$query = mysqli_query($con,"SELECT complainusers.tahun,COUNT(complainusers.tahun),bulan.namabulan from complainusers left join bulan on bulan.idbulan=complainusers.idbulan GROUP BY namabulan");
$rows = array();
$rows['name'] = 'idbulan';
while($tmp= mysqli_fetch_array($query)) {
    $rows['data'][] = $tmp['jumlah'];
}

// Data for Rice


$result = array();
array_push($result,$rows);
print json_encode($result, JSON_NUMERIC_CHECK);

mysqli_close($con);
?> 
