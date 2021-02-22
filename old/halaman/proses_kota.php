<!-- 
<script type="text/javascript" src="jquery-1.4.js"></script> -->
<?php
mysql_connect("localhost","homt3248_ms","moha11mmad");
mysql_select_db("homt3248_complaint1");

$kota = $_GET['idkota'];
$area = mysql_query("SELECT * FROM area WHERE idkota='$kota'");
echo "<option>--Pilih area--</option>";
while($k = mysql_fetch_array($area)){
    echo "<option value=$k[idarea]>$k[namaarea]</option> \n";
    // echo "SELECT * FROM area WHERE idkota='$idkota'";
}
?>
