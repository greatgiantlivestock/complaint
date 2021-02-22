<?php
include "koneksi.php";
$idchannel=$_POST["idx"];

$sql = "SELECT * FROM channel where idchannel='$idchannel'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<form  role="form" action="home.php?page=updatechannel" method="post">
            <div class="row">
            	<input type="hidden" name="idchannel" value="<?php echo $row['idchannel'];?>" >
                <div class="col-sm-6">Channel Name<input type="text" name="nm_channel"  class="form-control" value="<?php echo $row['nm_channel'];?>" ></div>
            </div> <br/>
           <div class="row">
            	<input type="hidden" name="idcustomer" value="<?php echo $row['idcustomer'];?>" >
                
                <div class="col-sm-12"><button class="btn btn-success" type="submit">Update</button></div>
            </div> 
            
</form>