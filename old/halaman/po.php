<html>
<head>
    <link href='icon.jpg' rel='shortcut icon'>
    <div id="wrapper">
        <div id="page-wrapper">
<hr/>
<div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Input Complains Customer 
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Customer Data</a>
                                </li>                            
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                    <form role="form" action="home.php?page=upload" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Customer ID</label>
                                            <input class="form-control" name="idcustomer" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                             <div class="form-group">
                                                   <input type="text"  class="form-control"> 
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <label> Select image to upload: </label>
                                             <div class="form-group">
                                                   <input type="file" name="fileToUpload" id="fileToUpload"> 
                                              </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-md">Submit Button</button>
                                        <button type="reset" class="btn btn-danger btn-md">Reset Button</button>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
</body>
</html>