<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=hasil.xls");

$servername = "localhost";
$username = "homt3248_ms";
$password = "moha11mmad";
$dbname = "homt3248_complaint1";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
                    <div class="panel panel-primary">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Customer ID</th>
                                        <th>Created by</th>
                                        <th>Complaint Portal</th>
                                        <th>Date of Report</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Contact Number</th>
                                        <th>City </th>
                                        <th>Area</th>
                                        <th>Channel</th>
                                        <th>Store</th>
                                        <th>Name of Store</th>
                                        <th>Complaint Type</th>
                                        <th>Product Type</th>
                                        <th>Batch Code </th>
                                        <th>Exp Date </th>
                                        <th>Packing Time </th>
                                        <th>Date of Purchase </th>
                                        <th>Date of Opening </th>
                                        <th>Date of Defect </th>
                                        <th>Comment</th>
                                        <th>Major/Minor</th>
                                        <th>Resolved</th>
                                        <th>Date of solved/replacement</th>
                                        <th>Review by</th>
                                        <th>Fedback</th>
                                        <th>Penanganan</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
// $sql = "SELECT complainusers.*,kota.namakota,area.namaarea,portal.nm_portal,produk.nm_produk,inquiry.nm_inquiry,channel.nm_channel,store3.name,
// tipecomplain.nm_tipecomplain, nama_level FROM complainusers LEFT JOIN kota ON complainusers.idkota = kota.idkota left join area on complainusers.idarea=area.idarea 
// left join portal on complainusers.id_portal=portal.idportal left join produk on complainusers.id_produk=produk.idproduk LEFT JOIN inquiry on 
// complainusers.id_inquiry=inquiry.id_inquiry left JOIN channel on complainusers.id_channel=channel.idchannel LEFT JOIN store3 on 
// complainusers.idstore=store3.id left join tipecomplain on complainusers.id_tipecomplains=tipecomplain.id LEFT JOIN level_complaint 
// ON complainusers.id_level=level_complaint.id_level";
$sql = "SELECT data_final2.*, user.nama as nama1 FROM(SELECT data_final.*,user.nama as nama_input FROM(SELECT complainusers.*,substr(complainusers.alamat,1,30) as ptg_alamat,kota.namakota,area.namaarea,portal.nm_portal,produk.nm_produk,inquiry.nm_inquiry,channel.nm_channel,store3.name,
tipecomplain.nm_tipecomplain,produkreview.nm_review,produkdev.nm_dev,impression.nm_impression,level_complaint.nama_level FROM complainusers LEFT JOIN kota 
ON complainusers.idkota = kota.idkota left join area on complainusers.idarea=area.idarea left join portal 
on complainusers.id_portal=portal.idportal left join produk on complainusers.id_produk=produk.idproduk LEFT JOIN inquiry 
on complainusers.id_inquiry=inquiry.id_inquiry left JOIN channel on complainusers.id_channel=channel.idchannel LEFT JOIN store3 
on complainusers.idstore=store3.id left join tipecomplain on complainusers.id_tipecomplains=tipecomplain.id left JOIN produkreview 
on produkreview.id_rev=complainusers.id_productreview left join produkdev on produkdev.id_dev=complainusers.id_productdev 
left join impression on impression.id_impression=complainusers.id_impression left join level_complaint 
ON level_complaint.id_level = complainusers.id_level order by complainusers.idcustomer DESC) as data_final LEFT JOIN user 
ON data_final.user=user.id)as data_final2 LEFT JOIN user ON user.id=data_final2.user1";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) 
        if($row["resolved"]=="ya"){
            ?>
            <tr class="odd gradeX">
                                        <td><?php echo $row['idcustomer'];?></td>
                                        <td><?php echo $row['nama_input'];?></td>
                                        <td><?php echo $row['nm_portal'];?></td>
                                        <?php if ($row['tanggal']=='1970-01-01'){
                                            echo "<td></td>";
                                        }else{
                                            echo "<td>$row[tanggal]</td>";
                                        } 
                                        ?>
                                        <!-- <td><?php echo substr($row['tanggal'],0,10);?>  -->
                                        <td><?php echo $row['nama'];?></td>
                                        <td><?php echo $row['alamat'];?></td>
                                        <td><?php echo $row['telp'];?></td>
                                        <td><?php echo $row['namakota'];?></td>
                                        <td><?php echo $row['namaarea'];?></td>
                                        <td><?php echo $row['nm_channel'];?></td>
                                        <td><?php echo $row['namastore'];?></td>
                                        <td><?php echo $row['storelocation'];?></td>
                                        <td><?php echo $row['nm_tipecomplain'];?></td>
                                        <td><?php echo $row['nm_produk'];?></td>
                                        <td><?php if($row['batch']=='1970-01-01'){echo '';}else{echo $row['batch'];}?></td>
                                        <td><?php if($row['expdate']=='1970-01-01'){echo '';}else{echo $row['expdate'];}?></td>
                                        <td><?php if($row['packing_time']=='1970-01-01'){echo '';}else{echo $row['packing_time'].".";}?></td>
                                        <td><?php if($row['datapurcase']=='1970-01-01'){echo '';}else{echo $row['datapurcase'];}?></td>
                                        <td><?php if($row['dateopening']=='1970-01-01'){echo '';}else{echo $row['dateopening'];}?></td>
                                        <td><?php if($row['datedefect']=='1970-01-01'){echo '';}else{echo $row['datedefect'];}?></td>
                                        <td><?php echo $row['komen'];?></td>
                                        <td><?php echo $row['nama_level'];?></td>
                                        <td><?php echo $row['resolved'];?></td>
                                        <td>
                                            <?php 
                                                if($row['date_solved']=="0000-00-00"){
                                                    echo "";
                                                }else{
                                                    echo $row['date_solved'];
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                                if($row['resolved']=="Pending"){
                                                    echo "Belum ditinjau";
                                                }else{
                                                    echo $row['nama1'];
                                                }
                                            ?>
                                        </td>
                                        <td><?php echo $row['feedback'];?></td>
                                        <td><?php echo $row['Penanganan'];?></td>
             </tr>
        <?php 
        }
        else   
        {
        ?>

           <tr class="odd gradeX">
                                        <td><?php echo $row['idcustomer'];?></td>
                                        <td><?php echo $row['nama_input'];?></td>
                                        <td><?php echo $row['nm_portal'];?></td>
                                        <?php if ($row['tanggal']=='1970-01-01'){
                                            echo "<td></td>";
                                        }else{
                                            echo "<td>$row[tanggal]</td>";
                                        } 
                                        ?>
                                        <!-- <td><?php echo substr($row['tanggal'],0,10);?> <?php echo $row['tanggal'];?></td> -->
                                        <td><?php echo $row['nama'];?></td>
                                        <td><?php echo $row['alamat'];?></td>
                                        <td><?php echo $row['telp'];?></td>
                                        <td><?php echo $row['namakota'];?></td>
                                        <td><?php echo $row['namaarea'];?></td>
                                        <td><?php echo $row['nm_channel'];?></td>
                                        <td><?php echo $row['namastore'];?></td>
                                        <td><?php echo $row['storelocation'];?></td>
                                        <td><?php echo $row['nm_tipecomplain'];?></td>
                                        <td><?php echo $row['nm_produk'];?></td>
                                        <td><?php if($row['batch']=='1970-01-01'){echo '';}else{echo $row['batch'];}?></td>
                                        <td><?php if($row['expdate']=='1970-01-01'){echo '';}else{echo $row['expdate'];}?></td>
                                        <td><?php if($row['packing_time']=='1970-01-01'){echo '';}else{echo $row['packing_time'].".";}?></td>
                                        <td><?php if($row['datapurcase']=='1970-01-01'){echo '';}else{echo $row['datapurcase'];}?></td>
                                        <td><?php if($row['dateopening']=='1970-01-01'){echo '';}else{echo $row['dateopening'];}?></td>
                                        <td><?php if($row['datedefect']=='1970-01-01'){echo '';}else{echo $row['datedefect'];}?></td>
                                        <td><?php echo $row['komen'];?></td>
                                        <td><?php echo $row['nama_level'];?></td>
                                        <td><?php echo $row['resolved'];?></td>
                                        <td>
                                            <?php 
                                                if($row['date_solved']=="0000-00-00"){
                                                    echo "";
                                                }else{
                                                    echo $row['date_solved'];
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                                if($row['resolved']=="Pending"){
                                                    echo "Belum ditinjau";
                                                }else{
                                                    echo $row['nama1'];
                                                }
                                            ?>
                                        </td>
                                        <td><?php echo $row['feedback'];?></td>
                                        <td><?php echo $row['Penanganan'];?></td>
             </tr>
        <?php
        }
    ?>
<?php   
}   
mysqli_close($conn);
?>   
                                </tbody>
                            </table>                         
                        </div>
                    </div>
                </div>
            </div>
    </div>