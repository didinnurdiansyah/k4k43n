<?php
$this->breadcrumbs=array(
    'Kecamatans'=>array('index'),
    $kecamatan->id,
);

$this->menu=array(
    array('label'=>Yii::t('app','List Kecamatan'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Kecamatan'), 'url'=>array('create')),
    array('label'=>Yii::t('app','Update Kecamatan'), 'url'=>array('update', 'id'=>$kecamatan->id)),
    array('label'=>Yii::t('app','Delete Kecamatan'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$kecamatan->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>Yii::t('app','Manage Kecamatan'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','View Kecamatan') ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$kecamatan,
    'attributes'=>array(
        'id',
        'nama',
        'kabupatenId',
        'created',
        'modified',
    ),
)); ?>
