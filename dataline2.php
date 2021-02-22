<?php
$con=mysqli_connect("localhost","gred3696_ms3","moha11mmad","gred3696_complaint");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}


// Data for Sugar
$query = mysqli_query($con,"SELECT bulan.namabulan, COUNT(mst_complaint.id_bulan) AS jumlah FROM mst_complaint RIGHT JOIN bulan ON mst_complaint.id_bulan = bulan.idbulan GROUP BY namabulan ORDER BY idbulan ASC");
$rows = array();
$rows['name'] = 'Bulan';
while($tmp= mysqli_fetch_array($query)) {
    $rows['data'][] = $tmp['jumlah'];
}

// Data for Rice


$result = array();
array_push($result,$rows);
print json_encode($result, JSON_NUMERIC_CHECK);

mysqli_close($con);
?> 
