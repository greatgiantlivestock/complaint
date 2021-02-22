 <div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-8">
        <div class="panel panel-primary">
          <div class="panel-heading">Input Store </div>
            <div class="panel-body">
              <div class="tab-content">
                <form role="form" action="home.php?page=simpanstore" method="post">
                  <div class="form-group">
                    <label>Store Code</label>
                      <input class="form-control" name="store_code">
                  </div>
                   <div class="form-group"> <label>Store </label>
                    <select name="store" class="form-control"  />
                                                      <option></option>
                                                      <?php
                                                        mysql_connect("localhost","root","");
                                                        mysql_select_db("complaints");
                                                        $sql = mysql_query("SELECT * FROM store2");
                                                        while($p=mysql_fetch_array($sql)){
                                                          

                                                           echo "<option value=$p[store] selected>$p[store]</option> \n";

                                                        
                                                          // else{
                                                          //   echo "<option value=$p[store] >$p[store]</option> \n";
                                                          // }
                                                        }
                                                       ?>
                                                     </select>
                  </div>
                  <div class="form-group"><label>City</label>
                   <select name="city" id="idkota" class="form-control" />
                                                      <option></option>
                                                      <?php
                                                        mysql_connect("localhost","root","");
                                                        mysql_select_db("complaints");
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
                  <div class="form-group">
                    <label>Address</label>
                      <input class="form-control" name="alamat">
                  </div>
                  <div class="form-group">
                    <label>Portal Code</label>
                      <input class="form-control" name="portal_code">
                  </div>
                  <button type="submit" class="btn btn-primary btn-md">Submit</button>
                </form>
              </div></div></div></div></div></div></div>
              