<?php
include "koneksi.php";
$idportal=$_POST["idx"];

$sql = "SELECT * FROM portal where idportal='$idportal'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<form  role="form" action="home.php?page=deleteportal" method="post">
            	<input type="hidden" name="idportal" value="<?php echo $row['idportal'];?>" >
           <div class="row"> 
             <div class="col-sm-12">  <div class="alert alert-danger">Portal Name
                  <input type="text" name="" class="form-control" value="<?php echo $row['nm_portal'];?>" readonly>
                   <strong>Are You Sure !!! </strong><B>Want To Delete <?php echo $row['nm_portal'];?></B> 
           </div>    </div>
           	            
                <div class="col-sm-12"><button class="btn btn-danger" type="submit">Delete </button> 
                	 <button 
                    onclick="history.go();" class="btn btn-success" type="reset">Cancel </button></div>
              
            </div> 
            
</form>