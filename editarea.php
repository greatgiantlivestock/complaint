<?php
include "koneksi.php";
$idarea=$_POST["idx"];

$sql = "SELECT * FROM `area` where idarea='$idarea'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<form  role="form" action="home.php?page=updatearea" method="post">
            <div class="row">
            	<input type="hidden" name="idarea" value="<?php echo $row['idarea'];?>" >
                <div class="col-sm-6">Area Name<input type="text" name="namaarea"  class="form-control" value="<?php echo $row['namaarea'];?>" ></div>
                <div class="col-sm-6">City Name
                	<select name="city" id="idkota" class="form-control" required>
 	<?php
                                                        mysql_connect("localhost","root","");
                                                        mysql_select_db("complaints");
                                                        $sql = mysql_query("SELECT * FROM kota");
                                                        while($p=mysql_fetch_array($sql)){
                                                          if($p['idkota']==$row['idkota']){

                                                           echo "<option value=$p[idkota] selected>$p[namakota]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[idkota] >$p[namakota]</option> \n";
                                                          }
                                                        }
                                                       ?>
 </select>
            </div> <br/>
           
                <div class="col-sm-6"><br/> <button class="btn btn-success" type="submit">Update</button></div>
            
            
</form>
                        