<?php
include "koneksi.php";
$idtipe=$_POST["idx"];

$sql = "SELECT * FROM tipecomplain where id='$idtipe'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<!-- <form  role="form" action="home.php?page=deletetipecomplain" method="post">
            <div class="row">
            	<input type="hidden" name="id" value="<?php echo $row['id'];?>" >
                <div class="col-sm-6">Name
             <input type="text" name="nm_tipecomplain"  class="form-control" value="<?php echo $row['nm_tipecomplain'];?>" ></div>
            </div> <br/>
           <div class="row">
            	
                
                <div class="col-sm-12"><button class="btn btn-success" type="submit">Update</button></div>
            </div> 
            
</form> -->

<form  role="form" action="home.php?page=deletetipecomplain" method="post">
            
        <input type="hidden" name="id" value="<?php echo $row['id'];?>" >
            <div class="row">
                <div class="col-sm-12">
                	<div class="alert alert-danger">Complaint Type
                  <input type="text" name="" class="form-control" value="<?php echo $row['nm_tipecomplain'];?>" readonly>
                          <strong>Are You Sure !!! </strong><B>Want To Delete <?php echo $row['nm_tipecomplain'];?></B>  
                    </div>
                </div>
           
            	
                
                <div class="col-sm-12"><button class="btn btn-danger" type="submit">Delete </button> <button 
                    onclick="history.go();" class="btn btn-success" type="reset">Cancel </button></div>
            </div> 
            
</form>