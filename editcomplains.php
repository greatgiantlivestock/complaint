<?php
include "koneksi.php";
$_POST["idx"];

$sql = "SELECT * FROM mst_complaint where id_customer='$_POST[idx]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<form  role="form" action="home.php?page=updatecomplains" method="post">
            <div class="row">
            	<input type="hidden" name="idcustomer" value="<?php echo $row['id_customer'];?>" >
                <div class="col-sm-6 ">Status
 													<select class="form-control" id="sel2" name="status">
 														<?php
 														if($row['status']=='Justified'){
                                                              echo "<option value='Not Defined'>Not Defined</option>
                                                                    <option value='Justified' checked>Justified</option>
                                                                    <option value='Might be Justified'>Might be Justified</option>
                                                                    <option value='Not Justified'>Not Justified</option>
                                                                    <option value='Customer Prespective'>Customer Prespective</option>";
 														}else if($row['status']=='Might be Justified'){
                                                            echo "<option value='Not Defined'>Not Defined</option>
                                                                    <option value='Justified'>Justified</option>
                                                                    <option value='Might be Justified' checked>Might be Justified</option>
                                                                    <option value='Not Justified'>Not Justified</option>
                                                                    <option value='Customer Prespective'>Customer Prespective</option>";
                                                        }else if($row['status']=='Not Justified'){
                                                            echo "<option value='Not Defined'>Not Defined</option>
                                                                    <option value='Justified'>Justified</option>
                                                                    <option value='Might be Justified'>Might be Justified</option>
                                                                    <option value='Not Justified' checked>Not Justified</option>
                                                                    <option value='Customer Prespective'>Customer Prespective</option>";
                                                        }else{
                                                            echo "<option value='Not Defined'>Not Defined</option>
                                                                    <option value='Justified'>Justified</option>
                                                                    <option value='Might be Justified'>Might be Justified</option>
                                                                    <option value='Not Justified'>Not Justified</option>
                                                                    <option value='Customer Prespective' checked>Customer Prespective</option>";
                                                        }?>
                                                      </select>
                </div>
                <div class="col-sm-6">Tanggal Resolved<input type="date" name="date_solved"  class="form-control" value="<?php echo $row['dateclose'];?>" ></div>
                <div class="col-sm-12">Category of Complaint / Nonconformance 
 													<select class="form-control" name="id_cat_comp" required>
 														<?php
                                                        mysql_connect("localhost","homt3248_ms","moha11mmad");
                                                        mysql_select_db("homt3248_complaint");
                                                        $sql = mysql_query("SELECT * FROM cat_complaint");
                                                        while($p=mysql_fetch_array($sql)){
                                                            echo "<option value=$p[id_cat_comp]>$p[nm_cat_comp]</option> \n";
                                                        }
                                                        ?>
                                                      </select>
                </div>
                <!-- <div class="col-sm-12">Feedback<input type="text" placeholder="Dapat diisi penyebab kerusakan atau hasil tinjauan" name="feedback"  class="form-control" value="<?php echo $row['action'];?>" ></div> -->
                <div class="col-sm-12">Penanganan<input type="text" placeholder="Disi penanganan yang dilakukan" name="penanganan"  class="form-control" value="<?php echo $row['action'];?>" ></div>
                <div class="col-sm-6 ">Keterangan
 													<select class="form-control" id="sel1" name="resolved">
 														<?php
 														if($row['status']=='Open')
 														{
                                                              echo "<option value='Open' checked>Open</option>
                                                                   <option value='Close'>Close</option>
                                                                   <option value='On Progress'>On Progres</option>
                                                                   <option value='Pending'>Pending</option>";
 														} 
 														else if($row['status']=='Pending'){
                                                            echo "<option value='Open'>Open</option>
                                                            <option value='Close'>Close</option>
                                                            <option value='On Progres'>On Progres</option>
                                                            <option value='Pending' checked>Pending</option>";
                                                        }else if($row['status']=='On Progres'){
                                                            echo "<option value='Open'>Open</option>
                                                            <option value='Close'>Close</option>
                                                            <option value='On Progres' checked>On Progres</option>
                                                            <option value='Pending'>Pending</option>";
                                                        }else
 														{
                                                            echo "<option value='Open'>Open</option>
                                                            <option value='Close' checked>Close</option>
                                                            <option value='On Progres'>On Progres</option>
                                                            <option value='Pending'>Pending</option>";
                                                         }														
 														?>
                                                        <!-- <option value="ya">ya</option>
                                                        <option value="tidak">tidak</option> -->
                                                      </select>
                	<!-- <input type="text" name="resolved" class="form-control" value="<?php echo $row['resolved'];?>"> --></div>
            </div> <br/>
           <div class="row">
            	<input type="hidden" name="idcustomer" value="<?php echo $row['id_customer'];?>" >
                
                <div class="col-sm-12"><button class="btn btn-success" type="submit">Update</button></div>
            </div> 
            
</form>