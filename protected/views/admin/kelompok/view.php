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
    array('label'=>Yii::t('app','Manage Kelompok'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','View Kelompok') ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$kelompok,
    'attributes'=>array(
        'id',
        'nama',
        'kabupatenId',
        'kecamatanId',
        'programKknId',
        'created',
        'modified',
    ),
)); ?>
