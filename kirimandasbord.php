
	<script type="text/javascript">
		$(function () {
			var chart;
			$(document).ready(function() {
				$.getJSON("dataline3.php", function(json) {
				
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
						rangeSelector: {
                          floating: true,
                          y: -65,
                         verticalAlign: 'bottom'
                        },

                       navigator: {
                       margin: 60
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
		</script><div id="page-wrapper">
            <!-- /.row -->
  <div class="row">
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
