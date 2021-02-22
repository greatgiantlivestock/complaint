

	<script>
		var chart1; 
		$(document).ready(function() {
			  chart1 = new Highcharts.Chart({
				 chart: {
					renderTo: 'mygraph',
					type: 'column'
				 },   
				 title: {
					text: 'Graph Complaint Portal'
				 },
				 xAxis: {
					categories: ['Complaint Portal']
				 },
				 yAxis: {
					title: {
					   text: 'Total Complaint'
					}
				 },
					  series:             
					[
						<?php 
					
						$con=mysqli_connect("localhost","homt3248_ms","moha11mmad","homt3248_complaint1");

						$sql   = "select count(complainusers.id_portal) as jumlah,portal.nm_portal from complainusers inner join portal on complainusers.id_portal=portal.idportal GROUP BY complainusers.id_portal";
						// $sql   = "select complaint_portal,COUNT(id_portal) as jumlah from complainusers GROUP by complaint_portal";
						$query = mysqli_query( $con, $sql )  or die(mysqli_error());
						while( $temp = mysqli_fetch_array( $query ) )
						{
							$nm_portal=$temp["nm_portal"];
							$total=$temp["jumlah"];

						?>
							{
							  name: '<?php echo $nm_portal; ?>',
							  data: [<?php echo $total; ?>]
							},
							<?php 
						} 	?>
						]
			  });
		   });	
	</script>

		<script>
		var chart1; 
		$(document).ready(function() {
			  chart1 = new Highcharts.Chart({
				 chart: {
					renderTo: 'mygraph2',
					type: 'column'
				 },   
				 title: {
					text: 'Graph Complaint City '
				 },
				 xAxis: {
					categories: ['Store']
				 },
				 yAxis: {
					title: {
					   text: 'Total Complaint '
					}
				 },
					  series:             
					[
						<?php 
					
						$con=mysqli_connect("localhost","homt3248_ms","moha11mmad","homt3248_complaint1");

						$sql   = "SELECT jml, name FROM (SELECT COUNT(*) AS jml, idstore FROM complainusers GROUP BY idstore ORDER BY jml DESC LIMIT 10) AS filterdata 
									JOIN store3 ON store3.id=filterdata.idstore";
						$query = mysqli_query( $con, $sql )  or die(mysqli_error());
						while( $temp = mysqli_fetch_array( $query ) )
						{
							$kota=$temp["name"];
							$total2=$temp["jml"];

						?>
							{
							  name: '<?php echo $kota; ?>',
							  data: [<?php echo $total2; ?>]
							},
							<?php 
						} 	?>
						]
			  });
		   });	
	</script>

	<!--  -->
	<script>
		var chart1; 
		$(document).ready(function() {
			  chart1 = new Highcharts.Chart({
				 chart: {
					renderTo: 'mygraph3',
					type: 'column'
				 },   
				 title: {
					text: 'Graph Complaint Type'
				 },
				 xAxis: {
					categories: ['Complaint Type ']
				 },
				 yAxis: {
					title: {
					   text: 'Total Complaint Type'
					}
				 },
					  series:             
					[
						<?php 
					
						$con=mysqli_connect("localhost","homt3248_ms","moha11mmad","homt3248_complaint1");

						// $sql   = "select id_tipecomplains,COUNT(id_tipecomplains) as jumlah from complainusers GROUP BY id_tipecomplains";
						$sql   = "select count(complainusers.id) as jumlah,tipecomplain.nm_tipecomplain from complainusers inner join tipecomplain on complainusers.id_tipecomplains=tipecomplain.id GROUP BY complainusers.id_tipecomplains";
						$query = mysqli_query( $con, $sql )  or die(mysqli_error());
						while( $temp = mysqli_fetch_array( $query ) )
						{
							$nm_tipecomplain=$temp["nm_tipecomplain"];
							$total=$temp["jumlah"];

						?>
							{
							  name: '<?php echo $nm_tipecomplain; ?>',
							  data: [<?php echo $total; ?>]
							},
							<?php 
						} 	?>
						]
			  });
		   });	
	</script>

	<script>
		var chart1; 
		$(document).ready(function() {
			  chart1 = new Highcharts.Chart({
				 chart: {
					renderTo: 'mygraph4',
					type: 'column'
				 },   
				 title: {
					text: 'Graph Complaint Type Product'
				 },
				 xAxis: {
					categories: ['Complaint Type Product']
				 },
				 yAxis: {
					title: {
					   text: 'Total Complaint'
					}
				 },
					  series:             
					[
						<?php 
					
						$con=mysqli_connect("localhost","homt3248_ms","moha11mmad","homt3248_complaint1");

						// $sql   = "select typeproduk,COUNT(typeproduk) as jumlah from complainusers GROUP by typeproduk";
						$sql   = "select count(complainusers.id_produk) as jumlah,produk.nm_produk from complainusers inner join produk on complainusers.id_produk=produk.idproduk GROUP BY complainusers.id_produk";
						$query = mysqli_query( $con, $sql )  or die(mysqli_error());
						while( $temp = mysqli_fetch_array( $query ) )
						{
							$nm_produk=$temp["nm_produk"];
							$total=$temp["jumlah"];

						?>
							{
							  name: '<?php echo $nm_produk; ?>',
							  data: [<?php echo $total; ?>]
							},
							<?php 
						} 	?>
						]
			  });
		   });	
	</script>

	<script type="text/javascript">
		$(function () {
			var chart;
			$(document).ready(function() {
				$.getJSON("dataline2.php", function(json) {
				
					chart = new Highcharts.Chart({
						chart: {
							renderTo: 'mygraph5',
							type: 'line'
							
						},
						title: {
							text: 'Graph Complaint'
							
						},
						subtitle: {
							text: 'tahun 2017'
						
						},
						xAxis: {
							categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
						},
						yAxis: {
							title: {
								text: 'Total Complaint'
							},
							plotLines: [{
								value: 0,
								width: 1,
								color: '#808080'
							}]
						},
						tooltip: {
							formatter: function() {
									return '<b>'+ this.series.name +'</b><br/>'+
									this.x +': '+ this.y;
							}
						},
						legend: {
							layout: 'vertical',
							align: 'right',
							verticalAlign: 'top',
							x: -10,
							y: 120,
							borderWidth: 0
						},
						series: json
					});
				});
			
			});
			
		});
		</script>
</head>
<body>
	<br/>

<?php 
	//query jumlah total
	$sqltotal= "SELECT * from complainusers";
	$resulttotal = mysqli_query($conn, $sqltotal);
	$jumlahtotal=mysqli_num_rows($resulttotal);
	//query jumlah pending
	$sqlpending= "SELECT * from complainusers where resolved='Pending'";
	$resultpending = mysqli_query($conn, $sqlpending);
	$jumlahpending=mysqli_num_rows($resultpending);    
	//query jumlah solved
	$sqlsolve= "SELECT * from complainusers where resolved='Ya'";
	$resultsolved = mysqli_query($conn, $sqlsolve);
	$jumlahsolved=mysqli_num_rows($resultsolved);     
	//query jumlah tidak
	$sqltidak= "SELECT * from complainusers where resolved='Tidak'";
	$resulttidak = mysqli_query($conn, $sqltidak);
	$jumlahtidak=mysqli_num_rows($resulttidak);     
?>        

<div id="page-wrapper">
  <div class="row">
  	<div class="alert alert-success">
                <strong>Welcome  </strong> 
               </div>
  	  <!-- <div class="col-sm-6">
          <div class="panel panel-primary">
			<div class="panel-heading"> Complaint of Portal
			</div>
			<div class="panel-body">
					 <div id ="mygraph"></div>
			</div>
		   </div>
	  </div> 
	  <div class="col-sm-6">
          <div class="panel panel-primary">
			<div class="panel-heading">Complaint of City
			</div>
			<div class="panel-body">
					 <div id ="mygraph2"></div>
			</div>
		   </div>
	  </div> 
  <div class="row">
  	  <div class="col-sm-6">
          <div class="panel panel-primary">
			<div class="panel-heading">Complaint of Type Complaint
			</div>
			<div class="panel-body">
					 <div id ="mygraph3"></div>
			</div>
		   </div>
	  </div> 
	  <div class="col-sm-6">
          <div class="panel panel-primary">
			<div class="panel-heading">Complaint of Product
			</div>
			<div class="panel-body">
					 <div id ="mygraph4"></div>
			</div>
		   </div>
	  </div>  -->
	  <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $jumlahtotal;?></div>
                                        <div>Total</div>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $jumlahsolved;?></div>
                                        <div>Solved</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $jumlahpending;?></div>
                                        <div>Pending</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $jumlahtidak;?></div>
                                        <div>Unresolved</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

				<div style="margin-top:20px">
		<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading">Mounthly Trend of Complaint </div>
					<div class="panel-body">
						<div id ="mygraph5"></div>
					</div>
			</div>
		</div>
		<div class="col-sm-4">
          <div class="panel panel-primary">
			<div class="panel-heading"> Complaint of Portal
			</div>
			<div class="panel-body">
					 <div id ="mygraph"></div>
			</div>
		   </div>
	  </div> 
	</div>

	  <div class="col-sm-9">
          <div class="panel panel-primary">
			<div class="panel-heading">Store Location Complaint
			</div>
			<div class="panel-body">
					 <div id ="mygraph2"></div>
			</div>
		   </div>
	  </div> 

	  <div class="col-sm-3">
          <div class="panel panel-primary">
			<div class="panel-heading">Complaint Type
			</div>
			<div class="panel-body">
					 <div id ="mygraph4"></div>
			</div>
		   </div>
	  </div> 

</div>
<!-- tambahan  -->


<!-- 	<script src="assets/js/highcharts.js"></script> -->
	<script src="exporting.js"></script>
        
</head>
<body>


<!--- Bagian Judul-->	
<!-- <div class="container" style="margin-top:20px">
	<div class="col-md-10">
		<div class="panel panel-primary">
			<div class="panel-heading">Report Customer Complaint </div>
				<div class="panel-body">
					<div id ="mygraph5"></div>
				</div>
		</div>
	</div>
</div>
 -->
</body>
</html>



