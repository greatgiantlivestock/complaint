<!-- 
<script type="text/javascript" src="jquery-1.4.js"></script> -->
<?php
mysql_connect("localhost","gred3696_ms3","moha11mmad");
mysql_select_db("gred3696_complaint");

$kota = $_GET['idkota'];
$area = mysql_query("SELECT * FROM area WHERE idkota='$kota'");
echo "<option>--Pilih area--</option>";
while($k = mysql_fetch_array($area)){
    echo "<option value=$k[idarea]>$k[namaarea]</option> \n";
    // echo "SELECT * FROM area WHERE idkota='$idkota'";
}
?>
