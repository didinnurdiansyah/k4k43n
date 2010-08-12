<?php
$this->breadcrumbs=array(
    'Kelompoks'=>array('index'),
    $kelompok->id=>array('view','id'=>$kelompok->id),
    'Update',
);

$this->menu=array(
    array('label'=>Yii::t('app','List Kelompok'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Kelompok'), 'url'=>array('create')),
    array('label'=>Yii::t('app','View Kelompok'), 'url'=>array('view', 'id'=>$kelompok->id)),
    array('label'=>Yii::t('app','Manage Kelompok'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Update Kelompok') ?></h2>

<?php echo $this->renderPartial('_form', array('kelompok'=>$kelompok)); ?>