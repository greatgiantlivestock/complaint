<!-- 
<script type="text/javascript" src="jquery-1.4.js"></script> -->
<?php
mysql_connect("localhost","gred3696_ms3","moha11mmad");
mysql_select_db("gred3696_complaint");

$kota = $_GET['id_cat'];
$area = mysql_query("SELECT * FROM category WHERE id_matgr='$kota'");
echo "<option></option>";
while($k = mysql_fetch_array($area)){
    echo "<option value=$k[id_cat]>$k[cat_name]</option> \n";
    // echo "SELECT * FROM area WHERE idkota='$idkota'";
}
?>
