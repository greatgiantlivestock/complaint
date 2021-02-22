	<script>
		var chart1; 
		$(document).ready(function() {
			  chart1 = new Highcharts.Chart({
				 chart: {
					renderTo: 'mygraph',
					type: 'column'
				 },   
				 title: {
					text: 'Grafik Complains Portal'
				 },
				 xAxis: {
					categories: ['Complains Portal']
				 },
				 yAxis: {
					title: {
					   text: 'Total Complains Portal'
					}
				 },
					  series:             
					[
						<?php 
					
						$con=mysqli_connect("localhost","root","","complaints");

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
					text: 'Grafik Complains City '
				 },
				 xAxis: {
					categories: ['City']
				 },
				 yAxis: {
					title: {
					   text: 'Total Complains City '
					}
				 },
					  series:             
					[
						<?php 
					
						$con=mysqli_connect("localhost","root","","complaints");

						$sql   = "select count(complainusers.idkota) as jumlah,kota.namakota from complainusers inner join kota on complainusers.idkota=kota.idkota GROUP BY complainusers.idkota";
						$query = mysqli_query( $con, $sql )  or die(mysqli_error());
						while( $temp = mysqli_fetch_array( $query ) )
						{
							$kota=$temp["namakota"];
							$total2=$temp["jumlah"];

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
					text: 'Grafik Complains Type'
				 },
				 xAxis: {
					categories: ['Complains Type ']
				 },
				 yAxis: {
					title: {
					   text: 'Total Complains Type'
					}
				 },
					  series:             
					[
						<?php 
					
						$con=mysqli_connect("localhost","root","","complaints");

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
					text: 'Grafik Complains Type Produk '
				 },
				 xAxis: {
					categories: ['Complains Type Produk']
				 },
				 yAxis: {
					title: {
					   text: 'Total Complains Type Produk'
					}
				 },
					  series:             
					[
						<?php 
					
						$con=mysqli_connect("localhost","root","","complaints");

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
							text: 'Grafik Complain'
							
						},
						subtitle: {
							text: 'tahun 2017'
						
						},
						xAxis: {
							categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
						},
						yAxis: {
							title: {
								text: 'jumlah'
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
<div id="page-wrapper">
            <!-- /.row -->
  <div class="row">
  	  <div class="col-sm-6">
          <div class="panel panel-primary">
			<div class="panel-heading">Complain Portal 
			</div>
			<div class="panel-body">
					 <div id ="mygraph"></div>
			</div>
		   </div>
	  </div> 
	  <div class="col-sm-6">
          <div class="panel panel-primary">
			<div class="panel-heading">Complain kota 
			</div>
			<div class="panel-body">
					 <div id ="mygraph2"></div>
			</div>
		   </div>
	  </div> 
  <div class="row">
  	  <div class="col-sm-6">
          <div class="panel panel-primary">
			<div class="panel-heading">Complain type 
			</div>
			<div class="panel-body">
					 <div id ="mygraph3"></div>
			</div>
		   </div>
	  </div> 
	  <div class="col-sm-6">
          <div class="panel panel-primary">
			<div class="panel-heading">Complain typeproduk
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
<div class="container" style="margin-top:20px">
	<div class="col-md-10">
		<div class="panel panel-primary">
			<div class="panel-heading">Report Complain Customer </div>
				<div class="panel-body">
					<div id ="mygraph5"></div>
				</div>
		</div>
	</div>
</div>

</body>
</html>


