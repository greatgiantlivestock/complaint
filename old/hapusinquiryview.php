<?php
include "koneksi.php";
$id=$_POST["idx"];

$sql = "SELECT * FROM inquiry where id_inquiry='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>


<form  role="form" action="home.php?page=deleteinquiry" method="post">
            
        <input type="hidden" name="id_inquiry" value="<?php echo $row['id_inquiry'];?>" >
            <div class="row">
                <div class="col-sm-12">
                	<div class="alert alert-danger">Inquiry
                  <input type="text" name="" class="form-control" value="<?php echo $row['nm_inquiry'];?>" readonly>
                           <strong>Are You Sure !!! </strong><B>Want To Delete <?php echo $row['nm_inquiry'];?></B>  
                    </div>
                </div>
           
            	
                
                <div class="col-sm-12"><button class="btn btn-danger" type="submit">Delete </button> 
                     <button 
                    onclick="history.go();" class="btn btn-success" type="reset">Cancel </button></div>
            </div> 
            
</form>