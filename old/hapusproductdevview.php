<?php
include "koneksi.php";
$id_dev=$_POST["idx"];

$sql = "SELECT * FROM produkdev where id_dev='$id_dev'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<form  role="form" action="home.php?page=deleteprodukdev" method="post">
            	<input type="hidden" name="id_dev" value="<?php echo $row['id_dev'];?>" >
           <div class="row"> 
             <div class="col-sm-12">  <div class="alert alert-danger">Name Dev
                  <input type="text" name="" class="form-control" value="<?php echo $row['nm_dev'];?>" readonly>
                   <strong>Are You Sure !!! </strong><B>Want To Delete <?php echo $row['nm_dev'];?></B> 
           </div>    </div>
           	            
                <div class="col-sm-12"><button class="btn btn-danger" type="submit">Delete </button> 
                	 <button 
                    onclick="history.go();" class="btn btn-success" type="reset">Cancel </button></div>
              
            </div> 
            
</form>