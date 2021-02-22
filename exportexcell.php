<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data_complaint.xls");

$servername = "localhost";
$username = "gred3696_ms3";
$password = "moha11mmad";
$dbname = "gred3696_complaint";
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
                                    <th>Complaint ID</th>
                                        <th>Created by</th>
                                        <th>Material Group</th>
                                        <th>Complaint Portal </th>
                                        <th>Category of Product</th>
                                        <th>Product</th>
                                        <th>Store Name</th>
                                        <th>Category of Complaint / Nonconformance</th>
                                        <th>Description of Complain/Nonconformance</th>
                                        <th>Type of Complaining People/Nonconformance</th>
                                        <th>Name of Complaining People/Nonconformance</th>
                                        <th>Address</th>
                                        <th>Contact Number</th>
                                        <th>Date of Complaint</th>
                                        <th>Date of Purchase</th>
                                        <th>Date of Milk Opening</th>
                                        <th>Date of Milk Defect</th>
                                        <th>Batch/Production Date</th>
                                        <th>Expired Date</th>
                                        <th>Packing Time</th>
                                        <th>Amount of Product</th>
                                        <th>UOM</th>
                                        <th>Reviewed by</th>
                                        <th>Major/Minor Issue</th>
                                        <th>Action Plan</th>
                                        <th>Status</th>
                                        <th>Date of Closed Status</th>
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
$sql = "SELECT mc.*,matgr_desc,nm_portal,cat_name,nm_produk,nm_cat_comp,nm_type,nama_level FROM mst_complaint mc JOIN matgroup mt 
    ON mc.id_matgr=mt.id_matgr JOIN portal pr ON mc.id_portal=pr.id_portal JOIN  category ct ON mc.id_cat=ct.id_cat 
    JOIN produk pd ON mc.id_product=pd.id_produk JOIN cat_complaint cc ON mc.id_cat_comp=cc.id_cat_comp JOIN type_comp tc 
    ON mc.id_type=tc.id_type JOIN level_complaint lc ON mc.id_level=lc.id_level";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) 
        if($row["status"]=="Ya"){?>
            <tr class="odd gradeX">
                                        <td><?php echo $row['id_customer'];?></td>
                                        <td><?php echo $row['created_by'];?></td>
                                        <td><?php echo $row['matgr_desc'];?></td>
                                        <td><?php echo $row['nm_portal'];?></td>
                                        <td><?php echo $row['cat_name'];?></td>
                                        <td><?php echo $row['nm_produk'];?></td>
                                        <td><?php echo $row['name_store'];?></td>
                                        <td><?php echo $row['nm_cat_comp'];?></td>
                                        <td><?php echo $row['desc_comp'];?></td>
                                        <td><?php echo $row['nm_type'];?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['address'];?></td>
                                        <td><?php echo "'"; echo $row['telp'];?></td>
                                        <td><?php echo $row['datecomp'];?></td>
                                        <?php 
                                            if ($row['datepurchase']=='0000-00-00'){
                                                echo "<td></td>";
                                            }else{
                                                echo "<td>$row[datepurchase]</td>";
                                            } 
                                        ?>
                                        <?php 
                                            if ($row['dateopening']=='0000-00-00'){
                                                echo "<td></td>";
                                            }else{
                                                echo "<td>$row[dateopening]</td>";
                                            } 
                                        ?>
                                        <?php 
                                            if ($row['datedefect']=='0000-00-00'){
                                                echo "<td></td>";
                                            }else{
                                                echo "<td>$row[datedefect]</td>";
                                            } 
                                        ?>
                                        <td><?php echo $row['batch'];?></td>
                                        <?php 
                                            if ($row['expdate']=='0000-00-00'){
                                                echo "<td></td>";
                                            }else{
                                                echo "<td>$row[expdate]</td>";
                                            } 
                                        ?>
                                        <td><?php echo $row['packing_time'];?></td>
                                        <td><?php echo $row['amount'];?></td>
                                        <td><?php echo $row['uom'];?></td>
                                        <?php 
                                            if ($row['review_by']==''){
                                                echo "<td>Belum Direview</td>";
                                            }else{
                                                echo "<td>$row[review_by]</td>";
                                            } 
                                        ?>
                                        <td><?php echo $row['nama_level'];?></td>
                                        <td><?php echo $row['action'];?></td> 
                                        <td><?php echo $row['status'];?></td> 
                                        <?php 
                                            if ($row['dateclose']=='0000-00-00'){
                                                echo "<td></td>";
                                            }else{
                                                echo "<td>$row[dateclose]</td>";
                                            } 
                                        ?>                     
            </tr>
        <?php 
        }
        else   
        {
        ?>

            <tr class="odd gradeX">
                                        <td><?php echo $row['id_customer'];?></td>
                                        <td><?php echo $row['created_by'];?></td>
                                        <td><?php echo $row['matgr_desc'];?></td>
                                        <td><?php echo $row['nm_portal'];?></td>
                                        <td><?php echo $row['cat_name'];?></td>
                                        <td><?php echo $row['nm_produk'];?></td>
                                        <td><?php echo $row['name_store'];?></td>
                                        <td><?php echo $row['nm_cat_comp'];?></td>
                                        <td><?php echo $row['desc_comp'];?></td>
                                        <td><?php echo $row['nm_type'];?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['address'];?></td>
                                        <td><?php echo "'"; echo $row['telp'];?></td>
                                        <td><?php echo $row['datecomp'];?></td>
                                        <?php 
                                            if ($row['datepurchase']=='0000-00-00'){
                                                echo "<td></td>";
                                            }else{
                                                echo "<td>$row[datepurchase]</td>";
                                            } 
                                        ?>
                                        <?php 
                                            if ($row['dateopening']=='0000-00-00'){
                                                echo "<td></td>";
                                            }else{
                                                echo "<td>$row[dateopening]</td>";
                                            } 
                                        ?>
                                        <?php 
                                            if ($row['datedefect']=='0000-00-00'){
                                                echo "<td></td>";
                                            }else{
                                                echo "<td>$row[datedefect]</td>";
                                            } 
                                        ?>
                                        <td><?php echo $row['batch'];?></td>
                                        <?php 
                                            if ($row['expdate']=='0000-00-00'){
                                                echo "<td></td>";
                                            }else{
                                                echo "<td>$row[expdate]</td>";
                                            } 
                                        ?>
                                        <td><?php echo $row['packing_time'];?></td>
                                        <td><?php echo $row['amount'];?></td>
                                        <td><?php echo $row['uom'];?></td>
                                        <?php 
                                            if ($row['review_by']==''){
                                                echo "<td>Belum Direview</td>";
                                            }else{
                                                echo "<td>$row[review_by]</td>";
                                            } 
                                        ?>
                                        <td><?php echo $row['nama_level'];?></td>
                                        <td><?php echo $row['action'];?></td> 
                                        <td><?php echo $row['status'];?></td> 
                                        <?php 
                                            if ($row['dateclose']=='0000-00-00'){
                                                echo "<td></td>";
                                            }else{
                                                echo "<td>$row[dateclose]</td>";
                                            } 
                                        ?>                     
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