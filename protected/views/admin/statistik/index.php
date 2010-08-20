<?php
$this->breadcrumbs=array(
    'Statistik',
);

?>
<h2><?php echo Yii::t('app','Statistik Mahasiswa KKN')?></h2>
<?php
Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/highcharts.js');
Yii::app()->clientScript->registerScript('chart',"
    new Highcharts.Chart({
        chart: {
            renderTo: 'chart',
            defaultSeriesType: 'column'
        },
        title: {
            text: 'Monthly Average Rainfall'
        },
        subtitle: {
            text: 'Source: WorldClimate.com'
        },
        xAxis: {
            categories: $listKodeFakultas
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Mahasiswa'
            },
            gridLineWidth: 1,
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
                    this.x +': '+ this.y +' orang';
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [
            {
                name: 'Statistik Jumlah Mahasiswa Per Fakultas',
                data: $listCountMahasiswa

            }
        ]
    });
");
?>
<div id="chart" style="width: 100%; height: 400px;"></div> 
