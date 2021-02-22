<!-- <?php
include "koneksi.php";
$id_dev=$_POST["idx"];

$sql = "SELECT * FROM produkdev where id_dev='$id_dev'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?> -->
<form  role="form" action="home.php?page=updateproduk" method="post">
            <div class="row">
            	<input type="hidden" name="id_dev" value="<?php echo $row['id_dev'];?>" >
                <div class="col-sm-6">Product Dev Name <input type="text" name="nm_dev"  class="form-control" value="<?php echo $row['nm_dev'];?>" ></div>
            </div> <br/>
           <div class="row">
            	<!-- <input type="hidden" name="idcustomer" value="<?php echo $row['idcustomer'];?>" > -->
                
                <div class="col-sm-12"><button class="btn btn-success" type="submit">Update</button></div>
            </div> 
            
</form>