<!-- 
<script type="text/javascript" src="jquery-1.4.js"></script> -->
<?php
mysql_connect("localhost","gred3696_ms3","moha11mmad");
mysql_select_db("gred3696_complaint");

$kota = $_GET['id_cat'];
$area = mysql_query("SELECT * FROM produk WHERE id_cat='$kota'");
echo "<option></option>";
while($k = mysql_fetch_array($area)){
    echo "<option value=$k[id_produk]>$k[nm_produk]</option> \n";
    // echo "SELECT * FROM area WHERE idkota='$idkota'";
}
?>
