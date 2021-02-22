<?php
include "koneksi.php";
$idproduk=$_POST["idx"];

$sql = "SELECT * FROM produk where idproduk='$idproduk'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<!-- <form  role="form" action="home.php?page=deleteproduk" method="post">
            <div class="row">
            	<input type="hidden" name="idproduk" value="<?php echo $row['idproduk'];?>" >
                <div class="col-sm-6">Name Produk<input type="text" name="nm_produk"  class="form-control" value="<?php echo $row['nm_produk'];?>" ></div>
            </div> <br/>
           <div class="row">
            	
                
                <div class="col-sm-12"><button class="btn btn-success" type="submit">Update</button></div>
            </div> 
            
</form> -->

<form  role="form" action="home.php?page=deleteproduk" method="post">
            
        <input type="hidden" name="idproduk" value="<?php echo $row['idproduk'];?>" >
            <div class="row">
                <div class="col-sm-12">
                	<div class="alert alert-danger">Product Name 
                  <input type="text" name="" class="form-control" value="<?php echo $row['nm_produk'];?>" readonly>
                          <strong>Are You Sure !!! </strong><B>Want To Delete <?php echo $row['nm_produk'];?></B>  
                    </div>
                </div>
           
            	
                
                <div class="col-sm-12"><button class="btn btn-danger" type="submit">Delete </button> 
                     <button 
                    onclick="history.go();" class="btn btn-success" type="reset">Cancel </button></div>
            </div> 
            
</form>