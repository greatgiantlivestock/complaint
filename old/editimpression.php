<?php
include "koneksi.php";
$id_impression=$_POST["idx"];

$sql = "SELECT * FROM impression where id_impression='$id_impression'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<form  role="form" action="home.php?page=updateimpression" method="post">
            <div class="row">
            	<input type="hidden" name="id_impression" value="<?php echo $row['id_impression'];?>" >
                <div class="col-sm-6">impression Name<input type="text" name="nm_impression"  class="form-control" value="<?php echo $row['nm_impression'];?>" ></div>
            </div> <br/>
           <div class="row">
            	<!-- <input type="hidden" name="idcustomer" value="<?php echo $row['idcustomer'];?>" > -->
                
                <div class="col-sm-12"><button class="btn btn-success" type="submit">Update</button></div>
            </div> 
            
</form>