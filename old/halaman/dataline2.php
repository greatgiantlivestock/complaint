<?php
$con=mysqli_connect("localhost","root","","complaints");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}


// Data for Sugar
$query = mysqli_query($con,"SELECT bulan.namabulan, COUNT(complainusers.idbulan) AS jumlah FROM complainusers RIGHT JOIN bulan ON complainusers.idbulan = bulan.idbulan GROUP BY namabulan");
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
