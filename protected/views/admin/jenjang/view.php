<?php
$this->breadcrumbs=array(
    'Jenjangs'=>array('index'),
    $jenjang->id,
);

$this->menu=array(
    array('label'=>Yii::t('app','List Jenjang'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Jenjang'), 'url'=>array('create')),
    array('label'=>Yii::t('app','Update Jenjang'), 'url'=>array('update', 'id'=>$jenjang->id)),
    array('label'=>Yii::t('app','Delete Jenjang'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$jenjang->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>Yii::t('app','Manage Jenjang'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','View Jenjang') ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$jenjang,
    'attributes'=>array(
        'id',
        'nama',
        'kode',
        'created',
        'modified',
    ),
)); ?>
