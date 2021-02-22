<?php 
//query jumlah total
$sqltotal= "SELECT * from complainusers";
$resulttotal = mysqli_query($conn, $sqltotal);
$jumlahtotal=mysqli_num_rows($resulttotal);
//query jumlah pending
$sqlpending= "SELECT * from complainusers where resolved='tidak'";
$resultpending = mysqli_query($conn, $sqlpending);
$jumlahpending=mysqli_num_rows($resultpending);    
//query jumlah solved
$sqlsolve= "SELECT * from complainusers where resolved='ya'";
$resultsolved = mysqli_query($conn, $sqlsolve);
$jumlahsolved=mysqli_num_rows($resultsolved);     
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
                                        <th>Customer ID</th>
                                        <th>Complaint Portal </th>
                                        <th>Date of Report</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Contact Number</th>
                                        <th>City </th>
                                        <th>Area</th>
                                        <th>Channel</th>
                                        <th>Store</th>
                                        <th>Name of Store</th>
                                        <th>Resolved</th>
                                        <th>Complaint Type</th>
                                        <th>Product Type</th>
                                        <th>Batch / Exp </th>
                                        <th>Date of Purchase </th>
                                        <th>Date of opening product</th>
                                        <th>Date of product defect</th>
                                        <th>Comment</th>
                                        <th>Date of replacement</th>
                                        <th>Prod Review</th>
                                        <th>Impression</th>
                                        <th>Prod Dev</th>
                                        <th>Inquiry </th>
                                        <th>Comment</th>
                                        <th></th> 
                                    </tr>
                                </thead>
                            <tbody>
<?php
// $sql = "SELECT complainusers.*,kota.namakota,area.namaarea,portal.nm_portal,produk.nm_produk,inquiry.nm_inquiry,channel.nm_channel,store.namastore,tipecomplain.nm_tipecomplain FROM complainusers LEFT JOIN kota ON complainusers.idkota = kota.idkota left join area on complainusers.idarea=area.idarea left join portal on complainusers.id_portal=portal.idportal left join produk on complainusers.id_produk=produk.idproduk LEFT JOIN inquiry on complainusers.id_inquiry=inquiry.id_inquiry left JOIN channel on complainusers.id_channel=channel.idchannel LEFT JOIN store on complainusers.idstore=store.idstore left join tipecomplain on complainusers.id_tipecomplains=tipecomplain.id";
$sql="SELECT complainusers.*,kota.namakota,area.namaarea,portal.nm_portal,produk.nm_produk,inquiry.nm_inquiry,channel.nm_channel,store2.store,tipecomplain.nm_tipecomplain,produkreview.nm_review,produkdev.nm_dev,impression.nm_impression FROM complainusers LEFT JOIN kota ON complainusers.idkota = kota.idkota left join area on complainusers.idarea=area.idarea left join portal on complainusers.id_portal=portal.idportal left join produk on complainusers.id_produk=produk.idproduk LEFT JOIN inquiry on complainusers.id_inquiry=inquiry.id_inquiry left JOIN channel on complainusers.id_channel=channel.idchannel LEFT JOIN store2 on complainusers.idstore=store2.id left join tipecomplain on complainusers.id_tipecomplains=tipecomplain.id left JOIN produkreview on produkreview.id_rev=complainusers.id_productreview left join produkdev on produkdev.id_dev=complainusers.id_productdev left join impression on impression.id_impression=complainusers.id_impression";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_array($result)) 
        if($row["resolved"]=="ya")
        {
            ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $row['idcustomer'];?></td>
                                        <td><?php echo $row['nm_portal'];?></td>
                                        <td><?php echo substr($row['tanggal'],0,10);?></td>
                                        <td><?php echo $row['nama'];?></td>
                                        <td><?php echo $row['alamat'];?></td>
                                        <td><?php echo $row['telp'];?></td>
                                        <td><?php echo $row['namakota'];?></td>
                                        <td><?php echo $row['namaarea'];?></td>
                                        <td><?php echo $row['nm_channel'];?></td>
                                        <td><?php echo $row['store'];?></td>
                                        <td><?php echo $row['storelocation'];?></td>
                                        <td>
                                          <a href='#edit_modal' class='btn btn-danger btn-small' data-toggle='modal' data-id="<?php echo $row['idcustomer'];?>"><?php echo $row['resolved'];?></a>
                                        </td>
                                        <td><?php echo $row['nm_tipecomplain'];?></td>
                                        <td><?php echo $row['nm_produk'];?></td>
                                       <?php if ($row['expdate']=='1970-01-01'){
                                            echo "<td>0000-00-00</td>";
                                        }else{
                                            echo "<td>$row[expdate]</td>";
                                        } 
                                        ?>
                                        <?php if ($row['datapurcase']=='1970-01-01'){
                                            echo "<td>0000-00-00</td>";
                                        }else{
                                            echo "<td>$row[datapurcase]</td>";
                                        } 
                                        ?>
                                    
                                        <!-- 
                                        <td><?php echo $row['datapurcase'];?></td> -->
                                        <?php if ($row['dateopening']=='1970-01-01'){
                                            echo "<td>0000-00-00</td>";
                                        }else{
                                            echo "<td>$row[dateopening]</td>";
                                        } 
                                        ?>
                                        <td><?php echo $row['dateopening'];?></td>
                                        <td><?php echo $row['datedefect'];?></td>
                                        <?php if ($row['datedefect']=='1970-01-01'){
                                            echo "<td>0000-00-00</td>";
                                        }else{
                                            echo "<td>$row[datedefect]</td>";
                                        } 
                                        ?>
                                        <td><?php echo $row['komen'];?></td>
                                        <!-- <td><?php echo $row['datereplace'];?></td>  -->
                                        <?php if ($row['datereplace']=='1970-01-01'){
                                            echo "<td>0000-00-00</td>";
                                        }else{
                                            echo "<td>$row[datereplace]</td>";
                                        } 
                                        ?>
                                        <td><?php echo $row['nm_review'];?></td>
                                        <td><?php echo $row['nm_impression'];?></td>
                                        <td><?php echo $row['nm_dev'];?></td>
                                        <td><?php echo $row['nm_inquiry'];?></td>
                                        <td><?php echo $row['comment'];?></td> 
                                                                      
                                        <td><a href="home.php?page=editcomplains&id=<?php echo $row['idcustomer'];?>"><button type="button" 
                                            class="btn btn-warning btn-sm">Edit <span class="glyphicon glyphicon-edit"></button></a>
                                             <a href="home.php?page=hapuscomplainsview&idcustomer=<?php echo $row['idcustomer'];?>">
                                            <button type="button" 
                                            class="btn btn-danger btn-sm">hapus <span class="glyphicon glyphicon-trash"></button></a>
                                           
                                        </td>
                                    </tr>
        
        <?php 
        }
        else   
        {
        ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $row['idcustomer'];?></td>
                                        <td><?php echo $row['nm_portal'];?></td>
                                        <td><?php echo substr($row['tanggal'],0,10);?></td>
                                        <td><?php echo $row['nama'];?></td>
                                        <td><?php echo $row['alamat'];?></td>
                                        <td><?php echo $row['telp'];?></td>
                                        <td><?php echo $row['namakota'];?></td>
                                        <td><?php echo $row['namaarea'];?></td>
                                        <td><?php echo $row['nm_channel'];?></td>
                                        <td><?php echo $row['store'];?></td>
                                        <td><?php echo $row['storelocation'];?></td>
                                        <td>
                                          <a href='#edit_modal' class='btn btn-danger btn-small' data-toggle='modal' data-id="<?php echo $row['idcustomer'];?>"><?php echo $row['resolved'];?></a>
                                        </td>
                                        <td><?php echo $row['nm_tipecomplain'];?></td>
                                        <td><?php echo $row['nm_produk'];?></td>
                                        <?php if ($row['expdate']=='1970-01-01'){
                                            echo "<td>0000-00-00</td>";
                                        }else{
                                            echo "<td>$row[expdate]</td>";
                                        } 
                                        ?>
                                        <!-- <td><?php echo $row['datapurcase'];?></td> -->
                                        <?php if ($row['datapurcase']=='1970-01-01'){
                                            echo "<td>0000-00-00</td>";
                                        }else{
                                            echo "<td>$row[datapurcase]</td>";
                                        } 
                                        ?>
                                         <?php if ($row['dateopening']=='1970-01-01'){
                                            echo "<td>0000-00-00</td>";
                                        }else{
                                            echo "<td>$row[dateopening]</td>";
                                        } 
                                        ?>
                                        <td><?php echo $row['dateopening'];?></td>
                                        <td><?php echo $row['datedefect'];?></td>
                                         <?php if ($row['datedefect']=='1970-01-01'){
                                            echo "<td>0000-00-00</td>";
                                        }else{
                                            echo "<td>$row[datedefect]</td>";
                                        } 
                                        ?>
                                        <td><?php echo $row['komen'];?></td>
                                        <!-- <td><?php echo $row['datereplace'];?></td>  -->
                                           <?php if ($row['datereplace']=='1970-01-01'){
                                            echo "<td>0000-00-00</td>";
                                        }else{
                                            echo "<td>$row[datereplace]</td>";
                                        } 
                                        ?>
                                        <td><?php echo $row['nm_review'];?></td>
                                        <td><?php echo $row['nm_impression'];?></td>
                                        <td><?php echo $row['nm_dev'];?></td>
                                        <td><?php echo $row['nm_inquiry'];?></td>
                                        <td><?php echo $row['comment'];?></td> 
                                                                      
                                        <td><a href="home.php?page=editcomplains&id=<?php echo $row['idcustomer'];?>"><button type="button" 
                                            class="btn btn-warning btn-sm">Edit <span class="glyphicon glyphicon-edit"></button></a>
                                             <a href="home.php?page=hapuscomplainsview&idcustomer=<?php echo $row['idcustomer'];?>">
                                            <button type="button" 
                                            class="btn btn-danger btn-sm">hapus <span class="glyphicon glyphicon-trash"></button></a>
                                           
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
  