<?php
include "koneksi.php";
$idarea=$_POST["idx"];

$sql = "SELECT *,namakota FROM area inner join kota on area.idkota=kota.idkota where idarea='$idarea'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<!-- <form  role="form" action="home.php?page=deletearea" method="post">
            <div class="row">
            	<input type="hidden" name="idarea" value="<?php echo $row['idarea'];?>" >
                <div class="col-sm-6">Name area<input type="text" name="namaarea"  class="form-control" value="<?php echo $row['namaarea'];?>" ></div>
                <div class="col-sm-6"><br/> <button class="btn btn-success" type="submit">Update</button></div>
            
            
</form> -->
<form  role="form" action="home.php?page=deletearea" method="post">
            
        <input type="hidden" name="idarea" value="<?php echo $row['idarea'];?>" >
            <div class="row">
                <div class="col-sm-12">
                	<div class="alert alert-danger">
                           Area Name 
                  <input type="text" name="" class="form-control" value="<?php echo $row['namaarea'];?>" readonly>
                           <strong>Are You Sure !!! </strong><B>Want To Delete <?php echo $row['namaarea'];?></B>    
                    </div>
                </div>
           
            	
                
                <div class="col-sm-12"><button class="btn btn-danger" type="submit">Delete </button> <button 
                    onclick="history.go();" class="btn btn-success" type="reset">Cancel </button></div>
            </div> 
            
</form>