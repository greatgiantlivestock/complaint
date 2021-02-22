<?php
include "koneksi.php";
$idstore=$_POST["idx"];
$sql = "SELECT * FROM store3 inner join kota on store3.city=kota.idkota where id='$idstore'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<script>
$(document).ready(function() {
    $('#html5Form').formValidation();
});
</script>
<form  role="form" action="home.php?page=updatestore" method="post">
            <div class="row">
            	<input type="hidden" name="id" value="<?php echo $row['id'];?>" >
                <div class="col-sm-6">Store ID<!-- <input type="text" name="store_code"  class="form-control" value="<?php echo $row['store_code'];?>" > -->
                     <input class="form-control" name="store_code" type="number" data-fv-integer-message="The value is not an integer"  value="<?php echo $row['customer'];?>"/>
                </div>

                <div class="col-sm-6">Address<input type="text" name="alamat"  class="form-control" value="<?php echo $row['street'];?>" ></div>
            </div>
            <div class="row">
            	
                <div class="col-sm-6">Name<input type="text" name="store"  class="form-control" value="<?php echo $row['name'];?>" >
                </div>
                <div class="col-sm-6">Search term <!-- <input type="text" name="portal_code"  class="form-control" value="<?php echo $row['portal_code'];?>" > -->
                <input class="form-control" name="search_term" type="text"   value="<?php echo $row['search_term'];?>"/></div>
            </div>
            <div class="row">
            	
                <div class="col-sm-6">City<!-- <input type="text" name="city"  class="form-control" value="<?php echo $row['namakota'];?>" > -->
                <!-- <select name="idkota" id="idkota" class="form-control" />
                                                      
                                                      <?php
                                                        mysql_connect("localhost","root","");
                                                        mysql_select_db("complaints");
                                                        $sql = mysql_query("SELECT * FROM kota");
                                                        while($p=mysql_fetch_array($sql)){
                                                          if($p['idkota']==$row['city']){

                                                           echo "<option value=$p[idkota] selected>$p[namakota]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[idkota] >$p[namakota]</option> \n";
                                                          }
                                                        }
                                                       ?>
                                                     </select>

 --><select name="city" id="idkota" class="form-control">
 	<?php
                                                        mysql_connect("localhost","root","");
                                                        mysql_select_db("complaints");
                                                        $sql = mysql_query("SELECT * FROM kota");
                                                        while($p=mysql_fetch_array($sql)){
                                                          if($p['idkota']==$row['city']){

                                                           echo "<option value=$p[idkota] selected>$p[namakota]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[idkota] >$p[namakota]</option> \n";
                                                          }
                                                        }
                                                       ?>
 </select>                                                
  </div>
            </div>
            <!-- <div class="row">
            	
                <div class="col-sm-6">Address<input type="text" name="alamat"  class="form-control" value="<?php echo $row['alamat'];?>" ></div>
            </div> -->
            <div class="row">
            	
            </div><br/>
           <div class="row">
                <div class="col-sm-12"> <button class="btn btn-success" type="submit">Update</button></div>
            </div> 
            
</form>