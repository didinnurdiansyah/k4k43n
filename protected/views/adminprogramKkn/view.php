<?php
$this->breadcrumbs=array(
    'Program Kkns'=>array('index'),
    $programKkn->id,
);

$this->menu=array(
    array('label'=>Yii::t('app','List ProgramKkn'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create ProgramKkn'), 'url'=>array('create')),
    array('label'=>Yii::t('app','Update ProgramKkn'), 'url'=>array('update', 'id'=>$programKkn->id)),
    array('label'=>Yii::t('app','Delete ProgramKkn'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$programKkn->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>Yii::t('app','Manage ProgramKkn'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','View Program Kkn') ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$programKkn,
    'attributes'=>array(
        'id',
        'nama',
        'deskripsi',
        'created',
        'modified',
    ),
)); ?>
