<?php
$this->breadcrumbs=array(
    'Kelompoks'=>array('index'),
    $kelompok->id,
);

$this->menu=array(
    array('label'=>Yii::t('app','List Kelompok'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Kelompok'), 'url'=>array('create')),
    array('label'=>Yii::t('app','Update Kelompok'), 'url'=>array('update', 'id'=>$kelompok->id)),
    array('label'=>Yii::t('app','Delete Kelompok'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$kelompok->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h2><?php echo Yii::t('app','View Kelompok') ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$kelompok,
    'attributes'=>array(
        'id',
        array(
            'name' => 'programKknId',
            'value' => $kelompok->programKkn->nama
        ),
        array(
            'name' => 'kabupatenId',
            'value' => $kelompok->kabupaten->nama
        ),
        array(
            'name' => 'kecamatanId',
            'value' => $kelompok->kecamatan->nama
        ),
        'lokasi',
        'created',
        'modified',
    ),
)); ?>
<h2><?php echo Yii::t('app','Daftar Mahasiswa di Kelompok')?></h2>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'mahasiswa-grid',
    'dataProvider'=>$mahasiswa->search(20),
    'columns'=>array(
        array(
            'header' => 'No',
            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',  
            'htmlOptions' => array('width' => '50px'),
        ),
        'namaLengkap',
        'displayJenisKelamin',
        array(
            'name'=>'jurusanId',
            'value'=>'$data->jurusan->nama',
              ),
        /*array(
            'name' => '',
            'htmlOptions' => array('width' => '75px'),
        ),*/
        /*array(
            'class'=>'CButtonColumn',
            'viewButtonUrl' => 'array("jurusan/view","id" => $data->id)',
            'updateButtonUrl' => 'array("jurusan/update","id" => $data->id)',
            'deleteButtonUrl' => 'array("jurusan/delete","id" => $data->id)',
        ),*/
    ),
)); ?>

<label>Location</label>: <br/>
<div id="map_canvas" style="height:200px"></div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
    var latlng = new google.maps.LatLng(<?php echo $kelompok->latitude ?>,<?php echo $kelompok->longitude?>);
    var contentString = '<?php echo Yii::t('app','Your Location')?>';
    
    var options = {
        zoom: 11,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById('map_canvas'), options);
    var marker = new google.maps.Marker({
        position: latlng, 
        map: map,
        title: contentString,
        draggable: false
    });
    google.maps.event.addListener(marker, 'position_changed', function() {
        $('#Kelompok_latitude').val(marker.getPosition().lat());
        $('#Kelompok_longitude').val(marker.getPosition().lng());
    });
</script>
