<?php
  $query = "SELECT max(id_customer) as id_customer FROM mst_complaint";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $hasil = mysqli_query($conn,$query);
  $data = mysqli_fetch_array($hasil);
  $id_customer = $data['id_customer'];
  $noUrut = (int) substr('$id_customer',4,4);
  $id_customer++;
  $char = "";
  $a = $char . sprintf("%04s", $id_customer);
?>
<html>
<script src="./asset/js/jquery-3.3.1.js" type="text/javascript"></script>
<script src="./asset/js/jquery-ui.js" type="text/javascript"></script>

<!-- <script type="text/javascript">
  function myFunction(x){
    
  }
</script> -->
<head>
    <link href='icon.jpg' rel='shortcut icon'>
    <div id="wrapper">
        <!-- Navigation -->
        <div id="page-wrapper">

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
        Input Complaint Customer 
      </div>
      <div class="panel-body">
        <!-- Nav tabs -->
        <!-- <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab">Customer</a>
          </li>
        </ul> -->
        <!-- Tab panes --> 
        <div class="tab-content">
          <div class="tab-pane fade in active" id="home">
            <form autocomplete="off" role="form" action="home.php?page=simpancomplains" method="post">
              <div class="form-group">
                <label>Customer ID *</label>
                <input class="form-control" name="id_customer" readonly value="<?php echo $a;?>">
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
                          echo "<option value=$p[id_matgr]>$p[matgr_desc]</option> \n";
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
                        echo "<option value=$p[id_portal]>$p[nm_portal]</option> \n";
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
                        echo "<option value=$p[id_cat]>$p[cat_name]</option> \n";
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
                          echo "<option value=$p[id_produk]>$p[nm_produk]</option> \n";
                        }
                      ?>
                  </select>
                </div>
              </div>
              <!-- <div class="form-group" >
                <label>Category of Complaint </label>
                <div class="form-group">
                  <select id="produk" name="id_cat_comp" class="form-control" required />
                    <option checked ></option>
                      <?php
                        mysql_connect("localhost","gred3696_ms3","moha11mmad");
                        mysql_select_db("gred3696_complaint");
                        $sql = mysql_query("SELECT * FROM cat_complaint");
                        while($p=mysql_fetch_array($sql)){
                          echo "<option value=$p[id_cat_comp]>$p[nm_cat_comp]</option> \n";
                        }
                      ?>
                  </select>
                </div>
              </div> -->
              <!-- <div class="form-group" >
                <label>Category of Complaint / Nonconformance </label>
                <div class="form-group">
                  <select name="id_cat_comp" class="form-control" required />
                    <option checked ></option>
                    <?php
                      mysql_connect("localhost","gred3696_ms3","moha11mmad");
                      mysql_select_db("gred3696_complaint");
                      $sql = mysql_query("SELECT * FROM cat_complaint");
                      while($p=mysql_fetch_array($sql)){
                          echo "<option value=$p[id_cat_comp]>$p[nm_cat_comp]</option> \n";
                      }
                    ?>
                  </select>
                </div>
              </div> -->
              <div class="form-group" >
                <label>Store Name </label>
                <input class="form-control" required name="name_store">
              </div>
              <div class="form-group" >
                <label>Description of Complain/Nonconformance </label>
                <input class="form-control" name="desc_comp">
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
                          echo "<option value=$p[id_reason]>$p[reason]</option> \n";
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
                        echo "<option value=$p[id_type]>$p[nm_type]</option> \n";
                      }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group" >
                <label>Name of Complaining People/Nonconformance</label>
                <input class="form-control" name="name">
              </div>
              <div class="form-group" >
                <label>Address</label>
                <input class="form-control" name="address">
              </div>
              <div class="form-group" >
                <label>Contact Number</label>
                <input class="form-control" name="telp">
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
                <input type="text" width="90%" id="datepicker1"  class="form-control"  name="datecomp" required>
              </div>
              <div class="form-group">
                <label> Date of Purchase </label>
                <input type="text" width="90%" id="datepicker2"  class="form-control" name="datepurchase">
              </div>
              <div class="form-group" id="dateopening">
                <label> Date of Milk Opening </label>
                <input type="text" width="90%" id="datepicker3"  class="form-control" name="dateopening">
              </div>
              <div class="form-group" id="datedefect">
                <label> Date of Milk Defect </label>
                <input type="text" width="90%" id="datepicker4"  class="form-control" name="datedefect">
              </div>
              <div class="form-group">
                <label>Batch Code </label>
                <input type="text" width="90%" id="datepicker5" class="form-control" name="batch">
              </div>
              <div class="form-group">
                <label> Exp Date </label>
                <input type="text" width="90%" id="datepicker6"  class="form-control" name="expdate">
              </div>
              <div class="form-group" id="packing_time">
                <label>Packing time </label>
                <input type="text" width="90%"  class="form-control" name="packing_time">
              </div>
              <div class="form-group">
                <label>Amount of Product </label>
                <input type="text" width="90%"  class="form-control" name="amount">
              </div>
              <div class="form-group">
                <label>UOM</label>
                <!-- <input type="text" width="90%"  class="form-control" name="uom"> -->
                <div class="form-group">
                  <select name="uom" class="form-control" required />
                    <option checked ></option>
                    <?php
                      mysql_connect("localhost","gred3696_ms3","moha11mmad");
                      mysql_select_db("gred3696_complaint");
                      $sql = mysql_query("SELECT * FROM uom");
                      while($p=mysql_fetch_array($sql)){
                        echo "<option value=$p[uom]>$p[uom]</option> \n";
                      }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label>Major / Minor </label><br>
                <label class="container">
                  <input type="radio" name="id_level" value="1"> Major
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="radio" name="id_level" value="2"> Minor
                  <span class="checkmark"></span>
                </label>
              </div>
              <button type="submit" class="btn btn-primary btn-md">Submit</button>
            </form>
          </div>
        </div>
        <div class="tab-pane fade" id="messages">
        </div>
      </div>
    </div>
  </div>
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