<?php
include "koneksi.php";
$_POST["idx"];

$sql = "SELECT * FROM complainusers where idcustomer='$_POST[idx]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<form  role="form" action="home.php?page=updatecomplains" method="post">
            <div class="row">
            	<input type="hidden" name="idcustomer" value="<?php echo $row['idcustomer'];?>" >
                <div class="col-sm-6 ">Resolved
 													<select class="form-control" id="sel1" name="resolved">
 														<?php
 														if($row['resolved']=='Ya')
 														{
                                                              echo "<option value='Ya' checked>Ya</option>
                                                                   <option value='Tidak'>Tidak</option>
                                                                   <option value='Pending'>Pending</option>";
 														} 
 														else if($row['resolved']=='Pending'){
                                                            echo "<option value='Ya'>Ya</option>
                                                            <option value='Tidak'>Tidak</option>
                                                            <option value='Pending' checked>Pending</option>";
                                                        }else
 														{
 																echo "<option value='Ya'>Ya</option>
                                                                 <option value='Tidak' checked>Tidak</option>
                                                                 <option value='Pending'>Pending</option>
                                                                   ";
                                                         }														
 														?>
                                                        <!-- <option value="ya">ya</option>
                                                        <option value="tidak">tidak</option> -->
                                                      </select>
                	<!-- <input type="text" name="resolved" class="form-control" value="<?php echo $row['resolved'];?>"> --></div>
                <div class="col-sm-6">Tanggal Resolved<input type="date" name="date_solved"  class="form-control" value="<?php echo $row['date_solved'];?>" ></div>
                <div class="col-sm-12">Feedback<input type="text" placeholder="Dapat diisi penyebab kerusakan atau hasil tinjauan" name="feedback"  class="form-control" value="<?php echo $row['feedback'];?>" ></div>
                <div class="col-sm-12">Penanganan<input type="text" placeholder="Disi penanganan yang dilakukan" name="Penanganan"  class="form-control" value="<?php echo $row['Penanganan'];?>" ></div>
            </div> <br/>
           <div class="row">
            	<input type="hidden" name="idcustomer" value="<?php echo $row['idcustomer'];?>" >
                
                <div class="col-sm-12"><button class="btn btn-success" type="submit">Update</button></div>
            </div> 
            
</form>