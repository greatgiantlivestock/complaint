<?php
include "koneksi.php";
$idtipe=$_POST["idx"];

$sql = "SELECT * FROM tipecomplain where id='$idtipe'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<form  role="form" action="home.php?page=updatetipe" method="post">
            <div class="row">
            	<input type="hidden" name="id" value="<?php echo $row['id'];?>" >
                <div class="col-sm-6">Complaint Type Name
             <input type="text" name="nm_tipecomplain"  class="form-control" value="<?php echo $row['nm_tipecomplain'];?>" ></div>
            </div> <br/>
           <div class="row">
            	<!-- <input type="hidden" name="idcustomer" value="<?php echo $row['idcustomer'];?>" > -->
                
                <div class="col-sm-12"><button class="btn btn-success" type="submit">Update</button></div>
            </div> 
            
</form>