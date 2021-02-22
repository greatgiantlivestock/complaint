<?php
include "koneksi.php";
$idproduk=$_POST["idx"];

$sql = "SELECT * FROM produk where idproduk='$idproduk'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        
?>
<form  role="form" action="home.php?page=updateproduk" method="post">
            <div class="row">
            	<input type="hidden" name="idproduk" value="<?php echo $row['idproduk'];?>" >
                <div class="col-sm-6">Name Produk<input type="text" name="nm_produk"  class="form-control" value="<?php echo $row['nm_produk'];?>" ></div>
            </div> <br/>
           <div class="row">
            	<!-- <input type="hidden" name="idcustomer" value="<?php echo $row['idcustomer'];?>" > -->
                
                <div class="col-sm-12"><button class="btn btn-success" type="submit">Update</button></div>
            </div> 
            
</form>