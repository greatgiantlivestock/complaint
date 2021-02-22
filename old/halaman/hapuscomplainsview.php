<?php
$id=$_GET["idcustomer"];
$sql = "SELECT complainusers.*,kota.namakota,area.namaarea,portal.nm_portal,produk.nm_produk,inquiry.nm_inquiry,channel.nm_channel,store3.name,tipecomplain.nm_tipecomplain,produkreview.nm_review,produkdev.nm_dev,impression.nm_impression FROM complainusers LEFT JOIN kota ON complainusers.idkota = kota.idkota left join area on complainusers.idarea=area.idarea left join portal on complainusers.id_portal=portal.idportal left join produk on complainusers.id_produk=produk.idproduk LEFT JOIN inquiry on complainusers.id_inquiry=inquiry.id_inquiry left JOIN channel on complainusers.id_channel=channel.idchannel LEFT JOIN store3 on complainusers.idstore=store3.id left join tipecomplain on complainusers.id_tipecomplains=tipecomplain.id left JOIN produkreview on produkreview.id_rev=complainusers.id_productreview left join produkdev on produkdev.id_dev=complainusers.id_productdev left join impression on impression.id_impression=complainusers.id_impression  WHERE complainusers.idcustomer='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>
 <html>
<head>
    <link href='icon.jpg' rel='shortcut icon'>
    <div id="wrapper">
        <!-- Navigation -->
        <div id="page-wrapper">
<!-- disini -->
<hr/>
<div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <b>Delete Customer Complaint</b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Customer Data</a>
                                </li>
                                <!-- <li><a href="#profile" data-toggle="tab">Complain Report </a>
                                </li>
                                <li><a href="#messages" data-toggle="tab">Customer Feedback </a>
                                </li> -->
                               
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <form role="form" action="home.php?page=hapuscomplains" method="post">
                                        <div class="form-group">
                                            <label>Customer ID *</label>
                                            <input class="form-control" name="idcustomer" readonly value="<?php echo $id;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Complaint Portal </label>
                                             <div class="form-group">
                                              <input class="form-control" name="id_portal" readonly value="<?php echo $row['nm_portal'];?>">
                                                     <!-- <select name="id_portal" class="form-control" readonly/>
                                                      <option>-- Pilih Portal --</option>
                                                      <?php
                                                        mysql_connect("localhost","root","");
                                                        mysql_select_db("complaints");
                                                        $sql = mysql_query("SELECT * FROM portal");
                                                        while($p=mysql_fetch_array($sql)){
                                                          if($p['idportal']==$row['id_portal']){

                                                           echo "<option value==$p[idportal] selected>$p[nm_portal]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[idportal] >$p[nm_portal]</option> \n";
                                                          }
                                                        }
                                                       ?>
                                                     </select> -->
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Report *</label>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" type="text/css"/>
<!--   <script src=" https://code.jquery.com/jquery-1.10.2.js" type="text/javascript"></script> -->
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js" type="text/javascript"></script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
  <script>
  $(function() {
    $( "#datepicker2" ).datepicker();
  });
  </script>
  <script>
  $(function() {
    $( "#datepicker3" ).datepicker();
  });
  </script>
    <script>
  $(function() {
    $( "#datepicker4" ).datepicker();
  });
  </script>
    <script>
  $(function() {
    $( "#datepicker5" ).datepicker();
  });
  </script>
    <script>
  $(function() {
    $( "#datepicker6" ).datepicker();
  });
  </script>
 
    <!-- <label>Tanggal: </label> -->
   <!--  <input type="text" id="datepicker" /> -->
<!-- <input type="text" id="datepicker" value="23-11-2013"> -->
                                            <!--  -->
                                        <input type="text" width="90%" id="datepicker"  class="form-control" value="<?php echo $row['tanggal']; ?>" name="tanggal" readonly>

                                              <!--  <input class="form-control" placeholder="1990-01-01" name="tanggal" > -->
                                        </div>
                                        <div class="form-group">
                                            <label>Name *</label>
                                               <input class="form-control" value="<?php echo $row['nama']; ?>" name="nama" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" value="<?php echo $row['alamat']; ?>" name="alamat" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Telp  </label>
                                            <input class="form-control" value="<?php echo $row['telp']; ?>" name="telp" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>City  </label>
                                            <div class="form-group">
                                              <input class="form-control" name="idkota" readonly value="<?php echo $row['namakota'];?>"> 

                                                   <!--  <select name="idkota" id="idkota" class="form-control" readonly/>
                                                      <option>-- Pilih Kota --</option>
                                                      <?php
                                                        mysql_connect("localhost","root","");
                                                        mysql_select_db("complaints");
                                                        $sql = mysql_query("SELECT * FROM kota");
                                                        while($p=mysql_fetch_array($sql)){
                                                          if($p['idkota']==$row['idkota']){

                                                           echo "<option value==$p[idkota] selected>$p[namakota]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[idkota] >$p[namakota]</option> \n";
                                                          }
                                                        }
                                                       ?>
                                                     </select> -->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Area </label>
<!--                                             <input class="form-control" placeholder="Enter area" name="area"> -->
                                                    <div class="form-group">
                                                      <input class="form-control" name="idarea" readonly value="<?php echo $row['namaarea'];?>"> 

                                                       <!--   <select id="area" name="idarea" class="form-control" readonly/>
                                                            <option>-- Pilih Area --</option>
                                                             </select> -->
                                                    </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Channel </label>
                                               <div class="form-group">
                                                 <input class="form-control" name="idchannel" readonly value="<?php echo $row['nm_channel'];?>"> 
                                                      <!-- <select name="idchannel" class="form-control"  readonly  />
                                                      <option></option>
                                                      <?php
                                                        mysql_connect("localhost","root","");
                                                        mysql_select_db("complaints");
                                                        $sql = mysql_query("SELECT * FROM channel");
                                                        while($p=mysql_fetch_array($sql)){
                                                           if($p['idchannel']==$row['id_channel']){

                                                           echo "<option value==$p[idchannel] selected>$p[nm_channel]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[idchannel] >$p[nm_channel]</option> \n";
                                                          }
                                                        }
                                                       ?>
                                                     </select> -->
                                                    </div>

                                        </div>
                                        <div class="form-group">
                                            <label>Store </label>
                                            <input class="form-control" name="idstore" readonly value="<?php echo $row['name'];?>"> 
                                             <!-- <select name="idstore" class="form-control"  readonly/>
                                                      <option>-- Pilih Store --</option>
                                                      <?php
                                                        mysql_connect("localhost","root","");
                                                        mysql_select_db("complaints");
                                                        $sql = mysql_query("SELECT * FROM store3");
                                                        while($p=mysql_fetch_array($sql)){
                                                          if($p['id']==$row['idstore']){

                                                           echo "<option value==$p[idstore] selected>$p[name]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[idstore] >$p[name]</option> \n";
                                                          }
                                                        }
                                                       ?>
                                                     </select> -->
                                        </div>
                                </div>
                                 <div class="form-group">
                                            <label>Store Location</label>
                                            <input class="form-control" name="storelocation" readonly value="<?php echo $row['storelocation'];?>">
                                              <!--  <input class="form-control" readonly value="<?php echo $row['storelocation']; ?>" name="storelocation" > -->
                                        </div>

                                
                                      <div class="form-group">
                                            <label>Complaint Type</label>
                                           <input class="form-control" name="idtipecomplain" readonly value="<?php echo $row['nm_tipecomplain'];?>">
                                            <!-- <select name="idtipecomplain" class="form-control" readonly/>
                                                      <option>-- Pilih tipe complain --</option>
                                                      <?php
                                                        mysql_connect("localhost","root","");
                                                        mysql_select_db("complaints");
                                                        $sql = mysql_query("SELECT * FROM tipecomplain");
                                                        while($a=mysql_fetch_array($sql)){
                                                            if($a['id']==$row['id_tipecomplains']){

                                                           echo "<option value==$a[id] selected>$a[nm_tipecomplain]</option> \n";

                                                          }else{
                                                            echo "<option value=$a[id] >$a[nm_tipecomplain]</option> \n";
                                                          }
                                                        }
                                                       ?>
                                                     </select> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Product Type</label>
                                               <div class="form-group">
                                                <input class="form-control" name="typeproduk" readonly value="<?php echo $row['nm_produk'];?>">
                                                       <!-- <select name="typeproduk"  class="form-control" readonly/>
                                                      <option>-- Pilih produk --</option>
                                                      <?php
                                                        mysql_connect("localhost","root","");
                                                        mysql_select_db("complaints");
                                                        $sql = mysql_query("SELECT * FROM produk");
                                                        while($p=mysql_fetch_array($sql)){
                                                           if($p['idproduk']==$row['id_produk']){

                                                           echo "<option value==$p[idproduk] selected>$p[nm_produk]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[idproduk] >$p[nm_produk]</option> \n";
                                                          }
                                                        }
                                                       ?>
                                                     </select> -->
                                                    </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Batch Code / Exp Date </label>
                                            <!-- <input class="form-control" placeholder="1990-01-01" name="expdate"> -->
                                             <input type="text" width="90%" id="datepicker2"  readonly class="form-control"  value="<?php echo $row['expdate']; ?>" name="expdate">

                                        </div>
                                        <div class="form-group">
                                            <label>Date of Purchase</label>
                                        <!--     <input class="form-control" placeholder="1990-01-01" name="datapurcase"> -->
                                        <input type="text" width="90%" id="datepicker3" readonly class="form-control" value="<?php echo $row['datapurcase']; ?>" name="datapurcase">
                                        </div>
                                        <div class="form-group">
                                            <label>Date of opening product</label>
                                        <!--     <input class="form-control" placeholder="1990-01-01" name="datapurcase"> -->
                                        <input type="text" width="90%" id="datepicker4"  readonly class="form-control" value="<?php echo $row['dateopening']; ?>" name="dateopening">
                                        </div>
                                        <div class="form-group">
                                            <label>Date of product defect</label>
                                        <!--     <input class="form-control" placeholder="1990-01-01" name="datapurcase"> -->
                                        <input type="text" width="90%" id="datepicker5" readonly value="<?php echo $row['datedefect']; ?>" class="form-control" name="datedefect">
                                        </div>
                                        <div class="form-group">
                                            <label>Comment </label>
                                            <input class="form-control" placeholder="Enter " readonly name="komen" value="<?php echo $row['komen']; ?>" >
                                        </div>
                                      <div class="form-group">
                                            <label>Date of replacement</label>
                                        <!--     <input class="form-control" placeholder="1990-01-01" name="datapurcase"> -->
                                        <input type="text" width="90%" id="datepicker6"  readonly value="<?php echo $row['datereplace']; ?>"class="form-control" name="datereplace">
                                        </div>
                              
                                
                                      <div class="form-group">
                                            <label>Product Review </label>
                                           <!--  <input class="form-control" value="<?php echo $row['productreview']; ?>" name="productreview"> -->
                                           <input class="form-control" name="productreview" readonly value="<?php echo $row['nm_review'];?>">
                                            <!-- <select name="productreview"  class="form-control" readonly/>
                                                      <option>-- Product Review--</option>
                                                      <?php
                                                        mysql_connect("localhost","root","");
                                                        mysql_select_db("complaints");
                                                        $sql = mysql_query("SELECT * FROM produkreview");
                                                        while($p=mysql_fetch_array($sql)){
                                                           // echo "<option value=$p[id_rev]>$p[nm_review]</option> \n";
                                                          if($p['id_rev']==$row['id_productreview']){

                                                           echo "<option value=$p[id_rev] selected>$p[nm_review]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[id_rev] >$p[nm_review]</option> \n";
                                                          }

                                                        }
                                                       ?>
                                                     </select> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Impression </label>
                                             <input class="form-control" name="impression" readonly value="<?php echo $row['nm_impression'];?>">
                                            <!-- <select name="impression"  class="form-control" readonly/>
                                                      <option>-- Impression--</option>
                                                      <?php
                                                        mysql_connect("localhost","root","");
                                                        mysql_select_db("complaints");
                                                        $sql = mysql_query("SELECT * FROM impression");
                                                        while($p=mysql_fetch_array($sql)){
                                                           // echo "<option value=$p[id_impression]>$p[nm_impression]</option> \n";
                                                          if($p['id_impression']==$row['id_impression']){

                                                           echo "<option value=$p[id_impression] selected>$p[nm_impression]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[id_impression] >$p[nm_impression]</option> \n";
                                                          }
                                                        }
                                                       ?>
                                                     </select> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Product Dev </label>
                                            <input class="form-control" name="Productdev" readonly value="<?php echo $row['nm_dev'];?>">
                                             <!-- <select name="Productdev"  class="form-control" readonly />
                                                      <option>-- Product Dev--</option>
                                                      <?php
                                                        mysql_connect("localhost","root","");
                                                        mysql_select_db("complaints");
                                                        $sql = mysql_query("SELECT * FROM produkdev");
                                                        while($p=mysql_fetch_array($sql)){
                                                           // echo "<option value=$p[id_dev]>$p[nm_dev]</option> \n";
                                                          if($p['id_dev']==$row['id_productdev']){

                                                           echo "<option value=$p[id_dev] selected>$p[nm_dev]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[id_dev] >$p[nm_dev]</option> \n";
                                                          }
                                                        }
                                                       ?>
                                                     </select> -->
                                        </div><div class="form-group">
                                            <label>Inquiry </label>
                                            <!-- <input class="form-control" placeholder="Enter inquiry" name="inquiry"> -->
                                              <div class="form-group">
                                                <input class="form-control" name="inquiry" readonly value="<?php echo $row['nm_inquiry'];?>">
                                                       <!-- <select name="inquiry"  class="form-control" readonly />
                                                      <option>-- Pilih inquiry --</option>
                                                      <?php
                                                        mysql_connect("localhost","root","");
                                                        mysql_select_db("complaints");
                                                        $sql = mysql_query("SELECT * FROM inquiry");
                                                        while($p=mysql_fetch_array($sql)){
                                                           if($p['id_inquiry']==$row['id_inquiry']){

                                                           echo "<option value==$p[id_inquiry] selected>$p[nm_inquiry]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[id_inquiry] >$p[nm_inquiry]</option> \n";
                                                          }
                                                        }
                                                       ?>
                                                     </select> -->
                                                    </div>
                                        
                                        <div class="form-group">
                                            <label>Comment </label>
                                            <input class="form-control" value="<?php echo $row['comment']; ?>" name="comment" readonly>
                                        </div>
                                   
                                        <button type="submit" class="btn btn-danger btn-md">Delete</button>
                                        <!-- <button type="reset" class="btn btn-danger btn-md">Reset Button</button> -->
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
<script type="text/javascript">
$(document).ready(function(){
  $("#idkota").change(function(){
    var idkota = $("#idkota").val();
    $.ajax({
        url: "home.php?page=proses_kota",
        data: "idkota=" + idkota,
        success: function(data){
            // jika data sukses diambil dari server, tampilkan di <select id=kota>
            $("#area").html(data);
        }
    });
  });
  
  $("#area").change(function(){
    var area = $("#area").val();
    $.ajax({
        url: "proses_area.php",
        data: "area=" + area,
        success: function(data){
            $("#ongkos").val(data);
        }
    });
  });
});
</script>