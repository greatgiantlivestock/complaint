<?php

$id=$_GET["idcustomer"];

$sql = "SELECT * FROM mst_complaint JOIN level_complaint ON mst_complaint.id_level = level_complaint.id_level WHERE id_customer='$id' ";

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

                                            <input readonly class="form-control" name="id_customer" readonly value="<?php echo $id;?>">

                                        </div>

                                        <div class="form-group">

                                        <label>Material Group</label>

                                        <div class="form-group">

                                          <select readonly id='id_matgr' name="id_matgr" class="form-control" required />

                                            <option checked ></option>

                                              <?php

                                                mysql_connect("localhost","gred3696_ms3","moha11mmad");

                                                mysql_select_db("gred3696_complaint");

                                                $sql = mysql_query("SELECT * FROM matgroup");

                                                while($p=mysql_fetch_array($sql)){

                                                  if($p['id_matgr']==$row['id_matgr']){

                                                    echo "<option value=$p[id_matgr] selected>$p[matgr_desc]</option> \n";

                                                   }else{

                                                     echo "<option value=$p[id_matgr] >$p[matgr_desc]</option> \n";

                                                   }

                                                }

                                              ?>

                                          </select>

                                        </div>

                                      </div>

                                      <div class="form-group" id="portal">

                                        <label>Complaint Portal </label>

                                        <div class="form-group">

                                          <select readonly name="id_portal" class="form-control" required />

                                            <option checked ></option>

                                            <?php

                                              mysql_connect("localhost","gred3696_ms3","moha11mmad");

                                              mysql_select_db("gred3696_complaint");

                                              $sql = mysql_query("SELECT * FROM portal");

                                              while($p=mysql_fetch_array($sql)){

                                                if($p['id_portal']==$row['id_portal']){

                                                echo "<option value=$p[id_portal] selected>$p[nm_portal]</option> \n";

                                                }else {

                                                  echo "<option value=$p[id_portal]>$p[nm_portal]</option> \n";

                                                }

                                              }

                                            ?>

                                          </select>

                                        </div>

                                      </div>

                                      <div class="form-group" >

                                        <label>Category of Product</label>

                                        <div class="form-group">

                                          <select readonly id="category" name="id_cat" class="form-control" required />

                                            <option checked ></option>

                                            <?php

                                              mysql_connect("localhost","gred3696_ms3","moha11mmad");

                                              mysql_select_db("gred3696_complaint");

                                              $sql = mysql_query("SELECT * FROM category");

                                              while($p=mysql_fetch_array($sql)){

                                                if($p['id_cat']==$row['id_cat']){

                                                  echo "<option value=$p[id_cat] selected>$p[cat_name]</option> \n";

                                                }else{

                                                  echo "<option value=$p[id_cat]>$p[cat_name]</option> \n";

                                                }

                                              }

                                            ?>

                                          </select>

                                        </div>

                                      </div>

                                      <div class="form-group" >

                                        <label>Product </label>

                                        <div class="form-group">

                                          <select readonly id="produk" name="id_product" class="form-control" required />

                                            <option checked ></option>

                                              <?php

                                                mysql_connect("localhost","gred3696_ms3","moha11mmad");

                                                mysql_select_db("gred3696_complaint");

                                                $sql = mysql_query("SELECT * FROM produk");

                                                while($p=mysql_fetch_array($sql)){

                                                  if($p['id_produk']==$row['id_product']){

                                                    echo "<option value=$p[id_produk] selected>$p[nm_produk]</option> \n";

                                                  }else{

                                                    echo "<option value=$p[id_produk]>$p[nm_produk]</option> \n";

                                                  }

                                                }

                                              ?>

                                          </select>

                                        </div>

                                      </div>

                                      <div class="form-group" >

                                        <label>Category of Complaint / Nonconformance </label>

                                        <div class="form-group">

                                          <select readonly name="id_cat_comp" class="form-control" required />

                                            <option checked ></option>

                                            <?php

                                              mysql_connect("localhost","gred3696_ms3","moha11mmad");

                                              mysql_select_db("gred3696_complaint");

                                              $sql = mysql_query("SELECT * FROM cat_complaint");

                                              while($p=mysql_fetch_array($sql)){

                                                if($p['id_cat_comp']==$row['id_cat_comp']){

                                                  echo "<option value=$p[id_cat_comp] selected>$p[nm_cat_comp]</option> \n";

                                                }else{

                                                  echo "<option value=$p[id_cat_comp]>$p[nm_cat_comp]</option> \n";

                                                }

                                              }

                                            ?>

                                          </select>

                                        </div>

                                      </div>

                                      <div class="form-group" >

                                        <label>Description of Complain/Nonconformance </label>

                                        <input readonly class="form-control" name="desc_comp" value="<?php echo $row['desc_comp']?>">

                                      </div>

                                      <div class="form-group" >

                                        <label>Type of Complaining People/Nonconformance</label>

                                        <div class="form-group">

                                          <select readonly name="id_type" class="form-control" required />

                                            <option checked ></option>

                                            <?php

                                              mysql_connect("localhost","gred3696_ms3","moha11mmad");

                                              mysql_select_db("gred3696_complaint");

                                              $sql = mysql_query("SELECT * FROM type_comp");

                                              while($p=mysql_fetch_array($sql)){

                                                if($p['id_type']==$row['id_type']){

                                                  echo "<option value=$p[id_type] selected>$p[nm_type]</option> \n";

                                                }else{

                                                  echo "<option value=$p[id_type]>$p[nm_type]</option> \n";

                                                }

                                              }

                                            ?>

                                          </select>

                                        </div>

                                      </div>

                                      <div class="form-group" >

                                        <label>Name of Complaining People/Nonconformance</label>

                                        <input readonly class="form-control" name="name" value="<?php echo $row['name']?>">

                                      </div>

                                      <div class="form-group" >

                                        <label>Address</label>

                                        <input readonly class="form-control" name="address" value="<?php echo $row['address']?>">

                                      </div>

                                      <div class="form-group" >

                                        <label>Contact Number</label>

                                        <input readonly class="form-control" name="telp" value="<?php echo $row['telp']?>">

                                      </div>

                                      <div class="form-group">

                                        <label>Date of Complaint</label>

                                        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" type="text/css"/>

                                        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js" type="text/javascript"></script>

                                        <script>

                                          $(function() {

                                            $( "#datepicker1" ).datepicker();

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

                                            $( "#datepicker41" ).timepicker();

                                          });

                                          $(document).ready(function(){

                                            $('#datepicker5').timepicker();

                                            $('#select_Store').select2();

                                          });

                                        </script>

                                        <script>

                                          $(function() {

                                            $( "#datepicker6" ).datepicker();

                                          });

                                        </script>

                                        <script>

                                          $(function() {

                                            $( "#datepicker7" ).datepicker();

                                          });

                                        </script>

                                        <script>

                                          $(function() {

                                            $( "#datepicker8" ).datepicker();

                                          });

                                        </script>

                                        <script>

                                          $(function() {

                                            $( "#datepicker9" ).datepicker();

                                          });

                                        </script>

                                        <?php $tgl=date('Y-m-d'); ?>

                                        <input readonly type="text" width="90%" id="datepicker1" value="<?php echo $row['datecomp']?>" class="form-control"  name="datecomp" required>

                                      </div>

                                      <div class="form-group">

                                        <label> Date of Purchase </label>

                                        <input readonly type="text" width="90%" id="datepicker2"  class="form-control" name="datepurchase" value="<?php echo $row['datepurchase']?>">

                                      </div>

                                      <div class="form-group" id="dateopening">

                                        <label> Date of Milk Opening </label>

                                        <input readonly type="text" width="90%" id="datepicker3"  class="form-control" name="dateopening" value="<?php echo $row['dateopening']?>">

                                      </div>

                                      <div class="form-group" id="datedefect">

                                        <label> Date of Milk Defect </label>

                                        <input readonly type="text" width="90%" id="datepicker4"  class="form-control" name="datedefect" value="<?php echo $row['datedefect']?>">

                                      </div>

                                      <div class="form-group">

                                        <label>Batch Code </label>

                                        <input readonly type="text" width="90%" id="datepicker5" class="form-control" name="batch" value="<?php echo $row['batch']?>">

                                      </div>

                                      <div class="form-group">

                                        <label> Exp Date </label>

                                        <input readonly type="text" width="90%" id="datepicker6"  class="form-control" name="expdate" value="<?php echo $row['expdate']?>">

                                      </div>

                                      <div class="form-group" id="packing_time">

                                        <label>Packing time </label>

                                        <input readonly type="text" width="90%"  class="form-control" name="packing_time" value="<?php echo $row['packing_time']?>">

                                      </div>

                                      <div class="form-group">

                                        <label>Amount of Product </label>

                                        <input readonly type="text" width="90%"  class="form-control" name="amount" value="<?php echo $row['amount']?>">

                                      </div>

                                      <div class="form-group">

                                        <label>UOM</label>

                                        <!-- <input readonly type="text" width="90%"  class="form-control" name="uom" value="<?php echo $row['uom']?>"> -->
                                        <div class="form-group">
                                          <select name="uom" class="form-control" required />
                                            <option checked ></option>
                                            <?php
                                              mysql_connect("localhost","gred3696_ms3","moha11mmad");
                                              mysql_select_db("gred3696_complaint");
                                              $sql = mysql_query("SELECT * FROM uom");
                                              while($p=mysql_fetch_array($sql)){
                                                if($p['uom']==$row['uom']){
                                                  echo "<option value=$p[uom] selected>$p[uom]</option> \n";
                                                }else{
                                                  echo "<option value=$p[uom]>$p[uom]</option> \n";
                                                }
                                              }
                                            ?>
                                          </select>
                                        </div>
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

            // jika data sukses diambil dari server, tampilkan di <select readonly id=kota>

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