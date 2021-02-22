<?php
include "koneksi.php";
$idkota=$_POST["idx"];

$sql = "SELECT * FROM kota where idkota='$_POST[idx]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<form  role="form" action="home.php?page=deletekota" method="post">
            
        <input type="hidden" name="idkota" value="<?php echo $row['idkota'];?>" >
            <div class="row">
                <div class="col-sm-12">
                	<div class="alert alert-danger">City
                  <input type="text" name="" class="form-control" value="<?php echo $row['namakota'];?>" readonly>
                           <strong>Are You Sure !!! </strong><B>Want To Delete <?php echo $row['namakota'];?></B>  
                    </div>
                </div>
           
            	
                
                <div class="col-sm-12"><button class="btn btn-danger" type="submit">Delete </button> 
                    <button 
                    onclick="history.go();" class="btn btn-success" type="reset">Cancel </button></div>
            </div> 
            
</form>