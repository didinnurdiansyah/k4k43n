<?php
$this->breadcrumbs=array(
    'Fakultases'=>array('index'),
    $fakultas->id,
);
$this->menu=array(
    array('label'=>'List Fakultas', 'url'=>array('index')),
    array('label'=>'Create Fakultas', 'url'=>array('create')),
    array('label'=>'Update Fakultas', 'url'=>array('update', 'id'=>$fakultas->id)),
    array('label'=>'Delete Fakultas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$fakultas->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Fakultas', 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','View Fakultas')?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$fakultas,
    'attributes'=>array(
		'id',
		'nama',
		'kode',
		'created',
		'modified',
    ),
)); ?>
