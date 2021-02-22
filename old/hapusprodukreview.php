<?php
include "koneksi.php";
$id=$_POST["idx"];

$sql = "SELECT * FROM produkreview where id_rev='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>


<form  role="form" action="home.php?page=deletereview" method="post">
            
        <input type="hidden" name="id_rev" value="<?php echo $row['id_rev'];?>" >
            <div class="row">
                <div class="col-sm-12">
                	<div class="alert alert-danger">
                        Product Review 
                  <input type="text" name="" class="form-control" value="<?php echo $row['nm_review'];?>" readonly>
                           <strong>Are You Sure !!! </strong><B>Want To Delete <?php echo $row['nm_review'];?></B>  
                    </div>
                </div>
           
            	
                
                <div class="col-sm-12"><button class="btn btn-danger" type="submit">Delete </button> 
                     <button 
                    onclick="history.go();" class="btn btn-success" type="reset">Cancel </button></div>
            </div> 
            
</form>