<?php
$this->breadcrumbs=array(
    'Jurusans'=>array('index'),
    $jurusan->id,
);
$this->menu=array(
    array('label'=>'List Jurusan', 'url'=>array('index')),
    array('label'=>'Create Jurusan', 'url'=>array('create')),
    array('label'=>'Update Jurusan', 'url'=>array('update', 'id'=>$jurusan->id)),
    array('label'=>'Delete Jurusan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$jurusan->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Jurusan', 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','View Jurusan')?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$jurusan,
    'attributes'=>array(
		'id',
		'nama',
		'kode',
		'fakultasId',
		'created',
		'modified',
    ),
)); ?>
