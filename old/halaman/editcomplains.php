<?php
$id=$_GET["id"];
$sql = "SELECT * FROM complainusers JOIN level_complaint ON complainusers.id_level = level_complaint.id_level WHERE idcustomer='$id' ";
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

<style>
/* The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 14px;
    font-weight: normal;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
</style>

<div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Edit Customer Complaint
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
                                    <form role="form" action="home.php?page=updatecomplains2" method="post">
                                        <div class="form-group">
                                            <label>Customer ID *</label>
                                            <input class="form-control" name="idcustomer" readonly value="<?php echo $id;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Complaint Portal </label>
                                             <div class="form-group">
                                                     <select name="id_portal" class="form-control" />
                                                      
                                                      <?php
                                                        mysql_connect("localhost","homt3248_ms","moha11mmad");
                                                        mysql_select_db("homt3248_complaint1");
                                                        $sql = mysql_query("SELECT * FROM portal");
                                                        while($p=mysql_fetch_array($sql)){
                                                          if($p['idportal']==$row['id_portal']){

                                                           echo "<option value=$p[idportal] selected>$p[nm_portal]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[idportal] >$p[nm_portal]</option> \n";
                                                          }
                                                        }
                                                       ?>
                                                     </select>
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
    $( "#datepicker21" ).datepicker();
  });
  </script>
  <script>
  $(function() {
    $( "#datepicker22" ).timepicker();
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
                                        <input type="text" width="90%" id="datepicker"  class="form-control" value="<?php echo $row['tanggal']; ?>" name="tanggal">

                                              <!--  <input class="form-control" placeholder="1990-01-01" name="tanggal" > -->
                                        </div>
                                        <div class="form-group">
                                            <label>Name *</label>
                                               <input class="form-control" value="<?php echo $row['nama']; ?>" name="nama" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" value="<?php echo $row['alamat']; ?>" name="alamat">
                                        </div>
                                        <div class="form-group">
                                            <label>Telp  </label>
                                            <input class="form-control" value="<?php echo $row['telp']; ?>" name="telp">
                                        </div>
                                        <div class="form-group">
                                            <label>City  </label>
                                            <div class="form-group">
                                                    <select name="idkota" id="idkota" class="form-control" />
                                                      <option></option>
                                                      <?php
                                                        mysql_connect("localhost","homt3248_ms","moha11mmad");
                                                        mysql_select_db("homt3248_complaint1");
                                                        $sql = mysql_query("SELECT * FROM kota");
                                                        while($p=mysql_fetch_array($sql)){
                                                          if($p['idkota']==$row['idkota']){

                                                           echo "<option value=$p[idkota] selected>$p[namakota]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[idkota] >$p[namakota]</option> \n";
                                                          }
                                                        }
                                                       ?>
                                                     </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Area </label>
<!--                                             <input class="form-control" placeholder="Enter area" name="area"> -->
                                                    <div class="form-group">
                                                         <select id="area" name="idarea" class="form-control"/>
                                                            <option></option>
                                                             </select>
                                                    </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Channel </label>
                                               <div class="form-group">
                                                      <select name="idchannel" class="form-control" required />
                                                      <option></option>
                                                      <?php
                                                        mysql_connect("localhost","homt3248_ms","moha11mmad");
                                                        mysql_select_db("homt3248_complaint1");
                                                        $sql = mysql_query("SELECT * FROM channel");
                                                        while($p=mysql_fetch_array($sql)){
                                                           if($p['idchannel']==$row['id_channel']){

                                                           echo "<option value=$p[idchannel] selected>$p[nm_channel]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[idchannel] >$p[nm_channel]</option> \n";
                                                          }
                                                        }
                                                       ?>
                                                     </select>
                                                    </div>

                                        </div>
                                        <div class="form-group">
                                            <label>Store </label>
                                             <select name="idstore" class="form-control"  />
                                                      <option></option>
                                                      <?php
                                                        mysql_connect("localhost","homt3248_ms","moha11mmad");
                                                        mysql_select_db("homt3248_complaint1");
                                                        $sql = mysql_query("SELECT * FROM store3");
                                                        while($p=mysql_fetch_array($sql)){
                                                          if($p['id']==$row['idstore']){

                                                           echo "<option value=$p[id] selected>$p[name]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[id] >$p[name]</option> \n";
                                                          }
                                                        }
                                                       ?>
                                                     </select>
                                        </div>
                                </div>
                                 <div class="form-group">
                                            <label>Store Location</label>
                                               <input class="form-control" value="<?php echo $row['storelocation']; ?>" name="storelocation" >
                                        </div>

                                
                                      <div class="form-group">
                                            <label>Complaint Type</label>
                                           <!--  <input class="form-control" placeholder="Enter tipecompaint" name="tipecompaint"> -->
                                            <select name="idtipecomplain" class="form-control" />
                                                      <option></option>
                                                      <?php
                                                        mysql_connect("localhost","homt3248_ms","moha11mmad");
                                                        mysql_select_db("homt3248_complaint1");
                                                        $sql = mysql_query("SELECT * FROM tipecomplain");
                                                        while($a=mysql_fetch_array($sql)){
                                                            if($a['id']==$row['id_tipecomplains']){

                                                           echo "<option value=$a[id] selected>$a[nm_tipecomplain]</option> \n";

                                                          }else{
                                                            echo "<option value=$a[id] >$a[nm_tipecomplain]</option> \n";
                                                          }
                                                        }
                                                       ?>
                                                     </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Type</label>
                                               <div class="form-group">
                                                       <select name="typeproduk"  class="form-control" />
                                                      <option></option>
                                                      <?php
                                                        mysql_connect("localhost","homt3248_ms","moha11mmad");
                                                        mysql_select_db("homt3248_complaint1");
                                                        $sql = mysql_query("SELECT * FROM produk");
                                                        while($p=mysql_fetch_array($sql)){
                                                           if($p['idproduk']==$row['id_produk']){

                                                           echo "<option value=$p[idproduk] selected>$p[nm_produk]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[idproduk] >$p[nm_produk]</option> \n";
                                                          }
                                                        }
                                                       ?>
                                                     </select>
                                                    </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Batch Code </label>
                                            <!-- <input class="form-control" placeholder="1990-01-01" name="batch"> -->
                                             <input type="text" width="90%" id="datepicker2" value="<?php echo $row['batch']; ?>"  class="form-control" name="batch">

                                        </div>
                                        <div class="form-group">
                                            <label>Exp Date </label>
                                            <!-- <input class="form-control" placeholder="1990-01-01" name="expdate"> -->
                                             <input type="text" width="90%" id="datepicker21"  class="form-control"  value="<?php echo $row['expdate']; ?>" name="expdate">

                                        </div>
                                        <div class="form-group">
                                            <label>Packing time </label>
                                            <!-- <input class="form-control" placeholder="1990-01-01" name="packing_time"> -->
                                             <input type="text" width="90%" id="datepicker22"  class="form-control" value="<?php echo $row['packing_time'];?>" name="packing_time">

                                        </div>
                                        <div class="form-group">
                                            <label>Date of Purchase</label>
                                        <!--     <input class="form-control" placeholder="1990-01-01" name="datapurcase"> -->
                                        <input type="text" width="90%" id="datepicker3"  class="form-control" value="<?php echo $row['datapurcase']; ?>" name="datapurcase">
                                        </div>
                                        <div class="form-group">
                                            <label>Date of opening product</label>
                                        <!--     <input class="form-control" placeholder="1990-01-01" name="datapurcase"> -->
                                        <input type="text" width="90%" id="datepicker4"  class="form-control" value="<?php echo $row['dateopening']; ?>" name="dateopening">
                                        </div>
                                        <div class="form-group">
                                            <label>Date of product defect</label>
                                        <!--     <input class="form-control" placeholder="1990-01-01" name="datapurcase"> -->
                                        <input type="text" width="90%" id="datepicker5"  value="<?php echo $row['datedefect']; ?>" class="form-control" name="datedefect">
                                        </div>
                                        <div class="form-group">
                                            <label>Comment </label>
                                            <input class="form-control" placeholder="Enter " name="komen" value="<?php echo $row['komen']; ?>" >
                                        </div>
                                      <!-- <div class="form-group">
                                            <label>Date of replacement</label> -->
                                        <!--     <input class="form-control" placeholder="1990-01-01" name="datapurcase"> -->
                                        <!-- <input type="text" width="90%" id="datepicker6"  value="<?php echo $row['datereplace']; ?>"class="form-control" name="datereplace">
                                        </div>
                              
                                
                                      <div class="form-group">
                                            <label>Product Review </label> -->
                                            <!-- <input class="form-control" value="<?php echo $row['productreview']; ?>" name="productreview"> -->
                                             <!-- <select name="productreview"  class="form-control" />
                                                      <option>-- Product Review--</option>
                                                      <?php
                                                        mysql_connect("localhost","homt3248_ms","moha11mmad");
                                                        mysql_select_db("homt3248_complaint1");
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
                                                     </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Impression </label> -->
                                            <!-- <input class="form-control" value="<?php echo $row['impression']; ?>" name="impression"> -->
                                             <!-- <select name="impression"  class="form-control" />
                                                      <option>-- Impression--</option>
                                                      <?php
                                                        mysql_connect("localhost","homt3248_ms","moha11mmad");
                                                        mysql_select_db("homt3248_complaint1");
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
                                                     </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Dev </label> -->
                                            <!-- <input class="form-control" value="<?php echo $row['Productdev']; ?>" name="Productdev"> -->
                                            <!-- <select name="Productdev"  class="form-control" />
                                                      <option>-- Product Dev--</option>
                                                      <?php
                                                        mysql_connect("localhost","homt3248_ms","moha11mmad");
                                                        mysql_select_db("homt3248_complaint1");
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
                                                     </select>
                                        </div><div class="form-group">
                                            <label>Inquiry </label> -->
                                            <!-- <input class="form-control" placeholder="Enter inquiry" name="inquiry"> -->
                                              <!-- <div class="form-group">
                                                       <select name="inquiry"  class="form-control" />
                                                      <option></option>
                                                      <?php
                                                        mysql_connect("localhost","homt3248_ms","moha11mmad");
                                                        mysql_select_db("homt3248_complaint1");
                                                        $sql = mysql_query("SELECT * FROM inquiry");
                                                        while($p=mysql_fetch_array($sql)){
                                                           if($p['id_inquiry']==$row['id_inquiry']){

                                                           echo "<option value=$p[id_inquiry] selected>$p[nm_inquiry]</option> \n";

                                                          }else{
                                                            echo "<option value=$p[id_inquiry] >$p[nm_inquiry]</option> \n";
                                                          }
                                                        }
                                                       ?>
                                                     </select>
                                                    </div> -->
                                        <label>Major / Minor </label><br>
                                        <?php if($row['id_level']==1){?>
                                          <label class="container">
                                              <input type="radio" name="id_level" checked="checked" value="1"> Major
                                              <span class="checkmark"></span>
                                          </label>
                                          <label class="container">
                                              <input type="radio" name="id_level" value="2"> Minor
                                              <span class="checkmark"></span>
                                          </label>
                                          <!-- <div class="btn-group" data-toggle="buttons">
                                                  <input type="radio" name="id_level" checked="checked" value="1"> Major
                                                  <input type="radio" name="id_level" value="2"> Minor
                                          </div> -->
                                        <?php }else if($row['id_level']==2) {?>
                                          <label class="container">
                                              <input type="radio" name="id_level" value="1"> Major
                                              <span class="checkmark"></span>
                                          </label>
                                          <label class="container">
                                              <input type="radio" name="id_level" checked="checked" value="2"> Minor
                                              <span class="checkmark"></span>
                                          </label>
                                          <!-- <div class="btn-group" data-toggle="buttons">
                                                  <input type="radio" name="id_level"  value="1"> Major
                                                  <input type="radio" name="id_level" checked="checked" value="2"> Minor
                                          </div> -->
                                        <?php }?>
                                        
                                        <!-- <div class="form-group">
                                            <label>Comment </label>
                                            <input class="form-control" value="<?php echo $row['comment']; ?>" name="comment">
                                        </div> -->
                                   
                                        <button type="submit" class="btn btn-primary btn-md">Update</button>
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