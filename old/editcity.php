<?php
include "koneksi.php";
$idkota=$_POST["idx"];

$sql = "SELECT * FROM kota where idkota='$_POST[idx]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<form  role="form" action="home.php?page=updatecity" method="post">
            <div class="row">
            	<input type="hidden" name="idkota" value="<?php echo $row['idkota'];?>" >
                <div class="col-sm-6">City<input type="text" name="namakota"  class="form-control" value="<?php echo $row['namakota'];?>" ></div>
            </div> <br/>
           <div class="row">
                <div class="col-sm-6">    <button class="btn btn-success" type="submit">Update</button></div>
            </div> 
            
</form>