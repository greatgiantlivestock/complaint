<?php
include "koneksi.php";
$idstore=$_POST["idx"];
$sql = "SELECT * FROM `store3` inner join kota on store3.city=kota.idkota where id='$idstore'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<form  role="form" action="home.php?page=deletestore" method="post">
            
        <input type="hidden" name="id" value="<?php echo $row['id'];?>" >
            <div class="row">
                <div class="col-sm-12">
                	<div class="alert alert-danger">Store ID
                  <input type="text" name="" class="form-control" value="<?php echo $row['customer'];?>" readonly>
                   Store
                  <input type="text" name="" class="form-control" value="<?php echo $row['name'];?>" readonly>
                  Search Term
                  <input type="text" name="" class="form-control" value="<?php echo $row['search_term'];?>" readonly>
                 
                  Address
                  <input type="text" name="" class="form-control" value="<?php echo $row['street'];?>" readonly>
                  City
                  <input type="text" name="" class="form-control" value="<?php echo $row['namakota'];?>" readonly>
                          <strong>Are You Sure !!! </strong><B>Want To Delete <?php echo $row['name'];?></B>  
                    </div>
                </div>
           
            	
                
                <div class="col-sm-12"><button class="btn btn-danger" type="submit">Delete </button> 
                    <button 
                    onclick="history.go();" class="btn btn-success" type="reset">Cancel </button>
            </div> 
            
</form>