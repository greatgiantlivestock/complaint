<?php
include "koneksi.php";
$id_impression=$_POST["idx"];

$sql = "SELECT * FROM impression where id_impression='$id_impression'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<form  role="form" action="home.php?page=deleteimpression" method="post">
            
        <input type="hidden" name="id_impression" value="<?php echo $row['id_impression'];?>" >
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-danger">Impression
                  <input type="text" name="" class="form-control" value="<?php echo $row['nm_impression'];?>" readonly>
                           <strong>Are You Sure !!! </strong><B>Want To Delete <?php echo $row['nm_impression'];?></B>  
                    </div>
                </div>
           
                
                
                <div class="col-sm-12"><button class="btn btn-danger" type="submit">Delete </button> 
                    <button 
                    onclick="history.go();" class="btn btn-success" type="reset">Cancel </button></div>
            </div> 
            
</form>