<?php
include "koneksi.php";
$idportal=$_POST["idx"];

$sql = "SELECT * FROM portal where idportal='$idportal'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<form  role="form" action="home.php?page=updateportal" method="post">
            <div class="row">
            	<input type="hidden" name="idportal" value="<?php echo $row['idportal'];?>" >
                <div class="col-sm-6">Portal<input type="text" name="nm_portal"  class="form-control" value="<?php echo $row['nm_portal'];?>" ></div>
            </div> <br/>
           <div class="row">
            	<!-- <input type="hidden" name="idcustomer" value="<?php echo $row['idcustomer'];?>" > -->
                
                <div class="col-sm-12"><button class="btn btn-success" type="submit">Update</button></div>
            </div> 
            
</form>