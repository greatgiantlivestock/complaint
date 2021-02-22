<?php
include "koneksi.php";
$idchannel=$_POST["idx"];

$sql = "SELECT * FROM channel where idchannel='$idchannel'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<form  role="form" action="home.php?page=deletechannel" method="post">
            
        <input type="hidden" name="idchannel" value="<?php echo $row['idchannel'];?>" >
            <div class="row">
                <div class="col-sm-12">
                	<div class="alert alert-danger">Channel 
                  <input type="text" name="" class="form-control" value="<?php echo $row['nm_channel'];?>" readonly>
                          <strong>Are You Sure !!! </strong><B>Want To Delete <?php echo $row['nm_channel'];?></B> 
                    </div>
                </div>
           
            	
                
                <div class="col-sm-12"><button class="btn btn-danger" type="submit">Delete </button> 
                     <button 
                    onclick="history.go();" class="btn btn-success" type="reset">Cancel </button></div>
            </div> 
            
</form>



   
            
