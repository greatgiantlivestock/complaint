<?php
include "koneksi.php";
$id=$_POST["idx"];

$sql = "SELECT * FROM produkreview where id_rev='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<form  role="form" action="home.php?page=updatereview" method="post">
            <div class="row">
            	<input type="hidden" name="id_rev" value="<?php echo $row['id_rev'];?>" >
                <div class="col-sm-6">Product Review Name<input type="text" name="nm_review"  class="form-control" value="<?php echo $row['nm_review'];?>" ></div>
            </div> <br/>
           <div class="row">
            	<input type="hidden" name="idcustomer" value="<?php echo $row['id_rev'];?>" >
                
                <div class="col-sm-12"><button class="btn btn-success" type="submit">Update</button></div>
            </div> 
            
</form>