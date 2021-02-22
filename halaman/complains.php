<?php 
//query jumlah total
$sqltotal= "SELECT * from mst_complaint";
$resulttotal = mysqli_query($conn, $sqltotal);
$jumlahtotal=mysqli_num_rows($resulttotal);
//query jumlah pending
$sqlpending= "SELECT * from mst_complaint where status='Pending'";
$resultpending = mysqli_query($conn, $sqlpending);
$jumlahpending=mysqli_num_rows($resultpending);    
//query jumlah solved
$sqlsolve= "SELECT * from mst_complaint where status='Ya'";
$resultsolved = mysqli_query($conn, $sqlsolve);
$jumlahsolved=mysqli_num_rows($resultsolved);     
//query jumlah tidak
$sqltidak= "SELECT * from mst_complaint where status='Tidak'";
$resulttidak = mysqli_query($conn, $sqltidak);
$jumlahtidak=mysqli_num_rows($resulttidak);     
?>
<br/>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $jumlahtotal;?></div>
                                        <div>Total</div>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $jumlahsolved;?></div>
                                        <div>Solved</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $jumlahpending;?></div>
                                        <div>Pending</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- heading atas  -->
                <div class="panel panel-primary">
                        <div class="panel-heading">
                            <a href="home.php?page=addcomplains">
                                <button type="button" class="btn btn-default">Add <span class="glyphicon glyphicon-plus-sign"></span></button></a> 
                            <a href="exportexcell.php">
                                <button type="button" class="btn btn-default">Export Excel</button></a>
                          <b>Customer Complaint</b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <table width="80%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <!-- <th>Customer ID</th> -->
                                        <th>Complaint ID</th>
                                        <th>Created by</th>
                                        <th>Material Group</th>
                                        <th>Complaint Portal </th>
                                        <th>Category of Product</th>
                                        <th>Product</th>
                                        <th>Store Name</th>
                                        <th>Category of Complaint / Nonconformance</th>
                                        <th>Description of Complain/Nonconformance</th>
                                        <!-- <th>Reason</th> -->
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
                                        <th>Keterangan</th>
                                        <th>Date of Closed Status</th>
                                        <th></th>
                                        <!-- <th>Date of Report</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Contact Number</th>
                                        <th>City </th>
                                        <th>Area</th>
                                        <th>Channel</th>
                                        <th>Store</th>
                                        <th>Name of Store</th>
                                        <th>Resolved</th>
                                        <th>Date Resolved</th>
                                        <th>Review by</th>
                                        <th>Complaint Type</th>
                                        <th>Product Type</th>
                                        <th>Exp Date</th>
                                        <th>Batch Code</th>
                                        <th>Packing Time</th>
                                        <th>Date of Purchase </th>
                                        <th>Date of opening product</th>
                                        <th>Date of product defect</th>
                                        <th>Comment</th> -->
                                        <!-- <th>Date of replacement</th>
                                        <th>Prod Review</th>
                                        <th>Impression</th>
                                        <th>Prod Dev</th>
                                        <th>Inquiry </th> -->
                                        <!-- <th>Level </th> -->
                                        <!-- <th>Comment</th> -->
                                        <!-- <th></th>  -->
                                    </tr>
                                </thead>
                            <tbody>
<?php
// $sql = "SELECT complainusers.*,kota.namakota,area.namaarea,portal.nm_portal,produk.nm_produk,inquiry.nm_inquiry,channel.nm_channel,store.namastore,tipecomplain.nm_tipecomplain FROM complainusers LEFT JOIN kota ON complainusers.idkota = kota.idkota left join area on complainusers.idarea=area.idarea left join portal on complainusers.id_portal=portal.idportal left join produk on complainusers.id_produk=produk.idproduk LEFT JOIN inquiry on complainusers.id_inquiry=inquiry.id_inquiry left JOIN channel on complainusers.id_channel=channel.idchannel LEFT JOIN store on complainusers.idstore=store.idstore left join tipecomplain on complainusers.id_tipecomplains=tipecomplain.id";
// $sql="SELECT data_final2.*, user.nama as nama1 FROM(SELECT data_final.*,user.nama as nama_input FROM(SELECT complainusers.*,substr(complainusers.alamat,1,30) as ptg_alamat,kota.namakota,area.namaarea,portal.nm_portal,produk.nm_produk,inquiry.nm_inquiry,channel.nm_channel,store3.name,
//         tipecomplain.nm_tipecomplain,produkreview.nm_review,produkdev.nm_dev,impression.nm_impression,level_complaint.nama_level FROM complainusers LEFT JOIN kota 
//         ON complainusers.idkota = kota.idkota left join area on complainusers.idarea=area.idarea left join portal 
//         on complainusers.id_portal=portal.id_portal left join produk on complainusers.id_produk=produk.id_produk LEFT JOIN inquiry 
//         on complainusers.id_inquiry=inquiry.id_inquiry left JOIN channel on complainusers.id_channel=channel.idchannel LEFT JOIN store3 
//         on complainusers.idstore=store3.id left join tipecomplain on complainusers.id_tipecomplains=tipecomplain.id left JOIN produkreview 
//         on produkreview.id_rev=complainusers.id_productreview left join produkdev on produkdev.id_dev=complainusers.id_productdev 
//         left join impression on impression.id_impression=complainusers.id_impression left join level_complaint 
//         ON level_complaint.id_level = complainusers.id_level order by complainusers.idcustomer DESC) as data_final LEFT JOIN user 
//         ON data_final.user=user.id)as data_final2 LEFT JOIN user ON user.id=data_final2.user1";
$sql="SELECT mc.*,matgr_desc,nm_portal,cat_name,nm_produk,nm_cat_comp,nm_type,nama_level,reason FROM mst_complaint mc JOIN matgroup mt 
    ON mc.id_matgr=mt.id_matgr JOIN portal pr ON mc.id_portal=pr.id_portal JOIN  category ct ON mc.id_cat=ct.id_cat 
    JOIN produk pd ON mc.id_product=pd.id_produk JOIN cat_complaint cc ON mc.id_cat_comp=cc.id_cat_comp JOIN type_comp tc 
    ON mc.id_type=tc.id_type JOIN level_complaint lc ON mc.id_level=lc.id_level JOIN reason ON reason.id_reason=mc.id_reason";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{

    $username_admin=$_SESSION["username"];
    while($row = mysqli_fetch_assoc($result)) 
        // $id_user1 = $row['user1'];
        // $sql_user= "SELECT nama FROM user WHERE id='$id_user1'";
        // $result1 = mysqli_query($conn, $sql_user);
        // $row1 = $result1->fetch_assoc();
        if($row["status"]=="Close"){
            // if(!$row['user1']==''){
            // }
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
                                        <!-- <td><?php echo $row['reason'];?></td> -->
                                        <td><?php echo $row['nm_type'];?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['address'];?></td>
                                        <td><?php echo $row['telp'];?></td>
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
                                        <td><?php echo $row['review_by'];?></td>
                                        <td><?php echo $row['nama_level'];?></td>
                                        <td><?php echo $row['action'];?></td>
                                        <td><?php echo $row['keterangan'];?></td>
                                        <td>
                                            <?php if($username_admin=="enny.setyowati" || $username_admin=="rizka"){?>
                                                <a href='#edit_modal' class='btn btn-success btn-small' data-toggle='modal' data-id="<?php echo $row['id_customer'];?>"><?php echo $row['status'];?></a>
                                            <?php }else{?>
                                                <a class='btn btn-success btn-small' data-toggle='modal' disabled data-id="<?php echo $row['id_customer'];?>"><?php echo $row['status'];?></a>
                                            <?php }?>
                                        </td>  
                                        <?php 
                                            if ($row['dateclose']=='0000-00-00'){
                                                echo "<td></td>";
                                            }else{
                                                echo "<td>$row[dateclose]</td>";
                                            } 
                                        ?>                     
                                        <td><a href="home.php?page=editcomplains&id=<?php echo $row['id_customer'];?>"><button type="button" 
                                                class="btn btn-warning btn-sm">Edit <span class="glyphicon glyphicon-edit"></button></a>
                                            <a href="home.php?page=hapuscomplainsview&idcustomer=<?php echo $row['id_customer'];?>">
                                                <button type="button" 
                                                class="btn btn-danger btn-sm">hapus <span class="glyphicon glyphicon-trash"></button></a>
                                            <!-- <a href="home.php?page=reportview&id=<?php echo $row['id'];?>">
                                                <button type="button" 
                                                class="btn btn-primary btn-sm"> Report <span class="fa fa-external-link"></button></a> -->
                                        </td>
                                    </tr>
        
        <?php 
        }else{
            // $id_user1 = $row['user1'];
            // $sql_user= "SELECT nama FROM user WHERE id='$id_user1'";
            // $result1 = mysqli_query($conn, $SQL_USERS);
            // $row1 = $result1->fetch_assoc();
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
                                        <!-- <td><?php echo $row['reason'];?></td> -->
                                        <td><?php echo $row['nm_type'];?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['address'];?></td>
                                        <td><?php echo $row['telp'];?></td>
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
                                        <td><?php echo $row['review_by'];?></td>
                                        <td><?php echo $row['nama_level'];?></td>
                                        <td><?php echo $row['action'];?></td>
                                        <td><?php echo $row['keterangan'];?></td>
                                        <td>
                                            <?php if($username_admin=="enny.setyowati" || $username_admin=="rizka"){?>
                                                <a href='#edit_modal' class='btn btn-danger btn-small' data-toggle='modal' data-id="<?php echo $row['id_customer'];?>"><?php echo $row['status'];?></a>
                                            <?php }else{?>
                                                <a class='btn btn-danger btn-small' data-toggle='modal' disabled data-id="<?php echo $row['id_customer'];?>"><?php echo $row['status'];?></a>
                                            <?php }?>
                                        </td>  
                                        <?php 
                                            if ($row['dateclose']=='0000-00-00'){
                                                echo "<td></td>";
                                            }else{
                                                echo "<td>$row[dateclose]</td>";
                                            } 
                                        ?>                     
                                        <td><a href="home.php?page=editcomplains&id=<?php echo $row['id_customer'];?>"><button type="button" 
                                                class="btn btn-warning btn-sm">Edit <span class="glyphicon glyphicon-edit"></button></a>
                                            <a href="home.php?page=hapuscomplainsview&idcustomer=<?php echo $row['id_customer'];?>">
                                                <button type="button" 
                                                class="btn btn-danger btn-sm">hapus <span class="glyphicon glyphicon-trash"></button></a>
                                            <!-- <a href="home.php?page=reportview&id=<?php echo $row['id'];?>">
                                                <button type="button" 
                                                class="btn btn-primary btn-sm"> Report <span class="fa fa-external-link"></button></a> -->
                                        </td>
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
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true,
            "order": [[ 0, "desc" ]]

        });
    });
    </script>
    <div class="modal fade" id="edit_modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Resolved</h4>
                </div>
                <div class="modal-body">
                    <div class="hasil-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>


  <script type="text/javascript">
    $(document).ready(function(){
        $('#edit_modal').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'editcomplains.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
