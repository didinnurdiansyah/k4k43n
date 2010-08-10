<?php
$this->breadcrumbs=array(
    'Fakultases'=>array('index'),
    $fakultas->id,
);

$this->menu=array(
    array('label'=>Yii::t('app','List Fakultas'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Fakultas'), 'url'=>array('create')),
    array('label'=>Yii::t('app','Update Fakultas'), 'url'=>array('update', 'id'=>$fakultas->id)),
    array('label'=>Yii::t('app','Delete Fakultas'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$fakultas->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>Yii::t('app','Manage Fakultas'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','View Fakultas') ?></h2>

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
