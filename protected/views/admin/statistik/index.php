<?php
$this->breadcrumbs=array(
	'Statistik',
);

?>
<h2><?php echo Yii::t('app','Statistik Mahasiswa KKN')?></h2>
<?php Yii::app()->clientScript->registerCoreScript('jquery');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/highcharts.js');?>
<?php
Yii::app()->clientScript->registerScript('chart',"
				
				 var chart = new Highcharts.Chart({
					chart: {
						renderTo: 'container',
						defaultSeriesType: 'column'
					},
					title: {
						text: 'Monthly Average Rainfall'
					},
					subtitle: {
						text: 'Source: WorldClimate.com'
					},
					xAxis: {
						categories: [
							'Jan', 
							'Feb', 
							'Mar', 
							'Apr', 
							'May', 
							'Jun', 
							'Jul', 
							'Aug', 
							'Sep', 
							'Oct', 
							'Nov', 
							'Dec'
						]
					},
					yAxis: {
						min: 0,
						title: {
							text: 'Rainfall (mm)'
						}
					},
					legend: {
						layout: 'vertical',
						backgroundColor: '#FFFFFF',
						align: 'left',
						verticalAlign: 'top',
						x: 100,
						y: 70
					},
					tooltip: {
						formatter: function() {
							return ''+
								this.x +': '+ this.y +' mm';
						}
					},
					plotOptions: {
						column: {
							pointPadding: 0.2,
							borderWidth: 0
						}
					},
				        series: [{
						name: 'Tokyo',
						data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
				
					}, {
						name: 'New York',
						data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]
				
					}, {
						name: 'London',
						data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]
				
					}, {
						name: 'Berlin',
						data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]
				
					}]
				});
				")
			
?>
<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
