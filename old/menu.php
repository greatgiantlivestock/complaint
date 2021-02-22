
<?php 
$nama=$_SESSION['username'];
$sql = "SELECT * FROM user where username='$nama'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if($row['level']=='1'){


?>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> CUSTOMER COMPLAINT<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="home.php?page=Complaint" ><i class="fa fa-table fa-fw"></i>COMPLAINT</a>
                                </li>
                                <li >
                                    <a href="home.php?page=dasbord" ><i class="fa fa-bar-chart-o fa-fw"></i>DASHBOARD </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> MASTER <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="home.php?page=store">STORE</a>
                                </li>
                                <li>
                                    <a href="home.php?page=city">CITY</a>
                                </li>
                                <li>
                                    <a href="home.php?page=area">AREA</a>
                                </li>
                                 <li>
                                    <a href="home.php?page=portal">PORTAL</a>
                                </li>
                                 <li>
                                    <a href="home.php?page=produk">PRODUCT</a>
                                </li>
                                 <li>
                                    <a href="home.php?page=tipecomplain">COMPLAINT TYPE </a>
                                </li>
                                 <li>
                                    <a href="home.php?page=channel">CHANNEL </a>
                                </li>
                                 <li>
                                    <a href="home.php?page=inquiry">INQUIRY </a>
                                </li>
                                <li>
                                    <a href="home.php?page=produkreview">PRODUCT REVIEW</a>
                                </li>
                                <li>
                                    <a href="home.php?page=impression">IMPRESSION </a>
                                </li>
                                <li>
                                    <a href="home.php?page=productdev">PRODUCT DEV </a>
                                </li>
                            </ul>

                       <!--  <li>
                            <a href="home.php?page=po"><i class="fa fa-files-o fa-fw"></i> SALES <span class="fa arrow"></span></a>
                        </li> -->
                         <li>
                            <a href="home.php?page=log"><Span class="glyphicon glyphicon-cog"></Span> Log <span class="fa arrow"></span></a>
                        </li>
                    </ul>
                </div>
               
            </div>
            <?php
             } else {
             ?>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> CUSTOMER COMPLAINT<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="home.php?page=Complaint" ><i class="fa fa-table fa-fw"></i>COMPLAINT</a>
                                </li>
                                <li >
                                    <a href="home.php?page=dasbord" ><i class="fa fa-bar-chart-o fa-fw"></i>DASHBOARD </a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> MASTER <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="home.php?page=store">STORE</a>
                                </li>
                                <li>
                                    <a href="home.php?page=city">CITY</a>
                                </li>
                                <li>
                                    <a href="home.php?page=area">AREA</a>
                                </li>
                                 <li>
                                    <a href="home.php?page=portal">PORTAL</a>
                                </li>
                                 <li>
                                    <a href="home.php?page=produk">PRODUCT</a>
                                </li>
                                 <li>
                                    <a href="home.php?page=tipecomplain">COMPLAINT TYPE </a>
                                </li>
                                 <li>
                                    <a href="home.php?page=channel">CHANNEL </a>
                                </li>
                                 <li>
                                    <a href="home.php?page=inquiry">INQUIRY </a>
                                </li>
                                <li>
                                    <a href="home.php?page=produkreview">PRODUCT REVIEW</a>
                                </li>
                                <li>
                                    <a href="home.php?page=impression">IMPRESSION </a>
                                </li>
                                <li>
                                    <a href="home.php?page=productdev">PRODUCT DEV </a>
                                </li> -->
                            </ul>
                        <!-- <li>
                            <a href="home.php?page=po"><i class="fa fa-files-o fa-fw"></i> SALES <span class="fa arrow"></span></a>
                        </li> -->
                    </ul>
                </div>
               
            </div>
<?php
             }
            ?>