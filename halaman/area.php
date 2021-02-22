<!-- <a href="index.php"> <input type="submit" class="btn btn-info" value="add"></a>  -->
<BR/>
        <div id="page-wrapper">
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          <b>Area <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Add <span class="glyphicon glyphicon-plus-sign"></span></button></b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                       <!--  <th>Id Area</th> -->
                                        <th>Area Name</th>
                                        <th>City Name</th>
                                        <th>Action </th>

                                    </tr>
                                </thead>
                                <tbody>
<?php

$sql = "SELECT area.idarea,area.namaarea,kota.namakota FROM area inner join kota on area.idkota=kota.idkota";
$result = mysqli_query($conn, $sql);
$no=0;
if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 

    {
        $no++;
       ?>
        <tr class="odd gradeX">
                                        <td><?php echo $no;?></td>
                                        <!-- <td><?php echo $row['idarea'];?></td> -->
                                        <td><?php echo $row['namaarea'];?></td>
                                        <td><?php echo $row['namakota'];?></td>
                                      <!--   <td><a href="home.php?page=deletearea&idarea=<?php echo $row['idarea'];?>">delete</a></td> -->
                                        <td><a href='#edit_modal3' class='btn btn-danger btn-small' data-toggle='modal' data-id="<?php echo $row['idarea'];?>">Delete <span class="glyphicon glyphicon-trash"></span></a> <a href='#edit_modal2' class='btn btn-warning btn-small' data-toggle='modal' data-id="<?php echo $row['idarea'];?>">Edit <span class="glyphicon glyphicon-edit"></span></a></td>
                                        
                                   
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

</body>

</html>


<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Area </h4>
        </div>
        <div class="modal-body">
          <form  role="form" action="home.php?page=simpanarea" method="post"">
            <div class="row">
               <!--  <div class="col-sm-4 ">Id Area<input type="text" name="idarea" class="form-control"></div> -->
                <div class="col-sm-4 ">Area<input type="text" name="namaarea"  class="form-control" required></div>
                <div class="col-sm-4 ">City <select name="idkota" id="idkota" class="form-control" required />
                                                      <option></option>
                                                      <?php
                                                        mysql_connect("localhost","gred3696_ms3","moha11mmad");
                                                        mysql_select_db("gred3696_complaint");
                                                        $sql = mysql_query("SELECT * FROM kota");
                                                        while($p=mysql_fetch_array($sql)){
                                                           echo "<option value=$p[idkota]>$p[namakota]</option> \n";
                                                        }
                                                       ?>
                                                     </select></div>

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
                    <h4 class="modal-title">Edit Area</h4>
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
                url : 'editarea.php',
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
                    <h4 class="modal-title">Delete Area </h4>
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
                url : 'hapusareaview.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>