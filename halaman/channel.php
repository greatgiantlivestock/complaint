<!-- <a href="index.php"> <input type="submit" class="btn btn-info" value="add"></a>  -->
<br/>
        <div id="page-wrapper">
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          <b>Channel <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Add <span class="glyphicon glyphicon-plus-sign"></span></button></b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                  
                                        <th>Channel </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
$no=0;
$sql = "SELECT * FROM channel";
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
                                       
                                        <td><?php echo $row['nm_channel'];?></td>
                                       <!--  <td><a href="home.php?page=deletekota&idkota=<?php echo $row['idkota'];?>">delete</a></td> -->
                                       <td><a href='#edit_modal3' class='btn btn-danger btn-small' data-toggle='modal' data-id="<?php echo $row['idchannel'];?>">Delete <span class="glyphicon glyphicon-trash"></a></a>
                                        <a href='#edit_modal2' class='btn btn-warning btn-small' data-toggle='modal' data-id="<?php echo $row['idchannel'];?>">Edit <span class="glyphicon glyphicon-edit"> </a></td>
                                        

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
          <h4 class="modal-title">Add Channel</h4>
        </div>
        <div class="modal-body">
         <form  role="form" action="home.php?page=simpanchannel" method="post"">
            <div class="row">
              <!--   <div class="col-sm-6 ">Id channel<input type="text" name="id_channel" class="form-control"></div> -->
                <div class="col-sm-6 ">Channel Name<input type="text" name="nm_channel"  class="form-control" required></div>

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
                    <h4 class="modal-title">Edit Channel</h4>
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
                url : 'editchannel.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>

  <!--  -->


<div class="modal fade" id="edit_modal3" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Delete Channel</h4>
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
                url : 'hapuschannelview.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>