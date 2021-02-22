<?php
include "koneksi.php";
$id=$_POST["idx"];

$sql = "SELECT * FROM inquiry where id_inquiry='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<form  role="form" action="home.php?page=updateinquiry" method="post">
            <div class="row">
            	<input type="hidden" name="id_inquiry" value="<?php echo $row['id_inquiry'];?>" >
                <div class="col-sm-6">Inquiry Name<input type="text" name="nm_inquiry"  class="form-control" value="<?php echo $row['nm_inquiry'];?>" ></div>
            </div> <br/>
           <div class="row">
            	<input type="hidden" name="idcustomer" value="<?php echo $row['idcustomer'];?>" >
                
                <div class="col-sm-12"><button class="btn btn-success" type="submit">Update</button></div>
            </div> 
            
</form>