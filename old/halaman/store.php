<!-- <a href="index.php"> <input type="submit" class="btn btn-info" value="add"></a>  -->
<br/>
        <div id="page-wrapper">
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          <b> Store <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Add <span class="glyphicon glyphicon-plus-sign"></span></button></b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Store ID</th>
                                        <th>Name</th>

                                    <!--     <th>Id store</th> -->
                                        <th>search_term</th>
                                        <th>City</th>
                                        <th>Address</th>
                                        
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
$no=0;
$sql = "SELECT * FROM `store3` left join kota on store3.city=kota.idkota";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 

    {
        $no++;
       ?>

        <tr class="odd gradeX">
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $row['customer']?></td>
                                        <td><?php echo $row['name']?></td>
                                       <!--  <td><?php echo $row['idstore'];?></td> -->
                                        <td><?php echo $row['search_term'];?></td>
                                         <td><?php echo $row['namakota'];?></td>
                                        <td><?php echo $row['street'];?></td>
                                       <!--  <td><?php echo $row['portal_code'];?></td>
 -->
                                        <td><a href='#edit_modal3' class='btn btn-warning btn-danger' data-toggle='modal' data-id="<?php echo $row['id'];?>">Delete <span class="glyphicon glyphicon-trash"></a> <a href='#edit_modal2' class='btn btn-warning btn-small' data-toggle='modal' data-id="<?php echo $row['id'];?>">Edit <span class="glyphicon glyphicon-edit"></a></td>

        </tr>
        <?php 
    }
}   

mysqli_close($conn);
?>
                              
                                    
                                  
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
      
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->


    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>


<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Store</h4>
        </div>
        <div class="modal-body">
            <!--  -->
          <form role="form" action="home.php?page=simpanstore" method="post">
            <div class="row"><script>
$(document).ready(function() {
    $('#html5Form').formValidation();
});
</script>
                <div class="col-sm-6">Store ID
                   <!--  <input type="" name="store_code"  class="form-control"> -->
                    <input class="form-control" name="store_code"  type="number" data-fv-integer-message="The value is not an integer" required />
                </div>
                <div class="col-sm-6">Name<input type="" name="store"  class="form-control" required></div>
            </div>
            <div class="row">
                <div class="col-sm-6 ">Search Term  <input type="text" name="search_term"  class="form-control" required>
                        
                                                 </div>
                <div class="col-sm-6">Address
                    <!-- <input type="" name="portal_code"  class="form-control"> -->
                    <input class="form-control" name="address" type="text"  />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 ">City<select name="city" id="idkota" class="form-control" required />
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
          
        </div>
        <div class="modal-footer">
           
           <input type="submit"  class="btn btn-default" ><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<div class="modal fade" id="edit_modal2" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Store</h4>
                </div>
                <div class="modal-body">
                    <div class="hasil-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Exit</button>
                </div>
            </div>
        </div>
    </div>

  <script type="text/javascript">
    $(document).ready(function(){
        $('#edit_modal2').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'editstore.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>


<div class="modal fade" id="edit_modal3" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Delete Store </h4>
                </div>
                <div class="modal-body">
                    <div class="hasil-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Exit</button>
                </div>
            </div>
        </div>
    </div>

  <script type="text/javascript">
    $(document).ready(function(){
        $('#edit_modal3').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'hapusstoreview.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>