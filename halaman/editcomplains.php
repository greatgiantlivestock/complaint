<?php
$id=$_GET["id"];
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
                                            <input class="form-control" name="id_customer" readonly value="<?php echo $id;?>">
                                        </div>
                                        <div class="form-group">
                                        <label>Material Group</label>
                                        <div class="form-group">
                                          <select id='id_matgr' name="id_matgr" class="form-control" required />
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
                                          <select name="id_portal" class="form-control" required />
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
                                          <select id="category" name="id_cat" class="form-control" required />
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
                                          <select id="produk" name="id_product" class="form-control" required />
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
                                        <label>Store Name </label>
                                        <input class="form-control" required value="<?php echo $row['name_store']?>" name="name_store">
                                      </div>
                                      <div class="form-group" >
                                        <label>Category of Complaint / Nonconformance </label>
                                        <div class="form-group">
                                          <select name="id_cat_comp" class="form-control" required />
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
                                        <input class="form-control" name="desc_comp" value="<?php echo $row['desc_comp']?>">
                                      </div>
                                      <!-- <div class="form-group" >
                                        <label>Reason</label>
                                        <div class="form-group">
                                          <select name="id_reason" class="form-control" required />
                                            <option checked ></option>
                                            <?php
                                              mysql_connect("localhost","gred3696_ms3","moha11mmad");
                                              mysql_select_db("gred3696_complaint");
                                              $sql = mysql_query("SELECT * FROM reason");
                                              while($p=mysql_fetch_array($sql)){
                                                if($p['id_reason']==$row['id_reason']){
                                                  echo "<option value=$p[id_reason] selected>$p[reason]</option> \n";
                                                }else{
                                                  echo "<option value=$p[id_reason]>$p[reason]</option> \n";
                                                }
                                              }
                                            ?>
                                          </select>
                                        </div>
                                      </div> -->
                                      <div class="form-group" >
                                        <label>Type of Complaining People/Nonconformance</label>
                                        <div class="form-group">
                                          <select name="id_type" class="form-control" required />
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
                                        <input class="form-control" name="name" value="<?php echo $row['name']?>">
                                      </div>
                                      <div class="form-group" >
                                        <label>Address</label>
                                        <input class="form-control" name="address" value="<?php echo $row['address']?>">
                                      </div>
                                      <div class="form-group" >
                                        <label>Contact Number</label>
                                        <input class="form-control" name="telp" value="<?php echo $row['telp']?>">
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
                                        <input type="text" width="90%" id="datepicker1" value="<?php echo date("m/d/Y",strtotime($row['datecomp']))?>" class="form-control"  name="datecomp" required>
                                      </div>
                                      <div class="form-group">
                                        <label> Date of Purchase </label>
                                        <input type="text" width="90%" id="datepicker2"  class="form-control" name="datepurchase" value="<?php echo date("m/d/Y",strtotime($row['datepurchase']))?>">
                                      </div>
                                      <div class="form-group" id="dateopening">
                                        <label> Date of Milk Opening </label>
                                        <?php if($row['dateopening']=='0000-00-00'){?>
                                          <input type="text" width="90%" id="datepicker3"  class="form-control" name="dateopening">
                                        <?php }else{?>
                                          <input type="text" width="90%" id="datepicker3"  class="form-control" name="dateopening" value="<?php echo date("m/d/Y",strtotime($row['dateopening']))?>">
                                        <?php }?>
                                      </div>
                                      <div class="form-group" id="datedefect">
                                        <label> Date of Milk Defect </label>
                                        <?php if($row['datedefect']=='0000-00-00'){?>
                                          <input type="text" width="90%" id="datepicker4"  class="form-control" name="datedefect">
                                        <?php }else{?>
                                          <input type="text" width="90%" id="datepicker4"  class="form-control" name="datedefect" value="<?php echo date("m/d/Y",strtotime($row['datedefect']))?>">
                                        <?php }?>
                                      </div>
                                      <div class="form-group">
                                        <label>Batch Code </label>
                                        <input type="text" width="90%" id="datepicker5" class="form-control" name="batch" value="<?php echo $row['batch']?>">
                                      </div>
                                      <div class="form-group">
                                        <label> Exp Date </label>
                                        <input type="text" width="90%" id="datepicker6"  class="form-control" name="expdate" value="<?php echo date("m/d/Y",strtotime($row['expdate']))?>">
                                      </div>
                                      <div class="form-group" id="packing_time">
                                        <label>Packing time </label>
                                        <input type="text" width="90%"  class="form-control" name="packing_time" value="<?php echo $row['packing_time']?>">
                                      </div>
                                      <div class="form-group">
                                        <label>Amount of Product </label>
                                        <input type="text" width="90%"  class="form-control" name="amount" value="<?php echo $row['amount']?>">
                                      </div>
                                      <div class="form-group">
                                        <label>UOM</label>
                                        <!-- <input type="text" width="90%"  class="form-control" name="uom" value="<?php echo $row['uom']?>"> -->
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
                                        <a href="home.php?page=Complaint">
                                                <button type="button" class="btn btn-danger btn-md">Cancle</button>
                                        </a>
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
    $("#category").change(function(){
      var id_cat = $("#category").val();
      $.ajax({
          url: "home.php?page=proses_cat",
          data: "id_cat=" + id_cat,
          success: function(data){
              $("#produk").html(data);
          }
      });
    });

    $("#id_matgr").change(function(){
      var id_cat = $("#id_matgr").val();
      if(id_cat == '1'){
        $("#packing_time").hide();
        $("#dateopening").hide();
        $("#datedefect").hide();
      }else if(id_cat == '2'){
        $("#packing_time").show();
        $("#dateopening").show();
        $("#datedefect").show();
      }
      $.ajax({
          url: "home.php?page=proses_matgr",
          data: "id_cat=" + id_cat,
          success: function(data){
              $("#category").html(data);
          }
      });
    });

    $("#idkota").change(function(){
      var idkota = $("#idkota").val();
      $.ajax({
          url: "home.php?page=proses_kota",
          data: "idkota=" + idkota,
          success: function(data){
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
<script type="text/javascript">
    $(function(){
       $('.select2').select2({
           minimumInputLength: 3,
           allowClear: true,
           placeholder: 'masukkan nama propinsi',
           ajax: {
              dataType: 'json',
              url: 'action/daftarProvinsi.php',
              delay: 800,
              data: function(params) {
                return {
                  search: params.term
                }
              },
              processResults: function (data, page) {
              return {
                results: data
              };
            },
          }
      }).on('select2:select', function (evt) {
         var data = $(".select2 option:selected").text();
         alert("Data yang dipilih adalah "+data);
      });
  });
</script>