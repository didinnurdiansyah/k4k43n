<?php
$this->breadcrumbs=array(
    'Program Studis'=>array('index'),
    $programStudi->id=>array('view','id'=>$programStudi->id),
    'Update',
);

$this->menu=array(
    array('label'=>Yii::t('app','List Program Studi'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Program Studi'), 'url'=>array('create')),
    array('label'=>Yii::t('app','View Program Studi'), 'url'=>array('view', 'id'=>$programStudi->id)),
    array('label'=>Yii::t('app','Manage Program Studi'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Update Program Studi') ?></h2>

<?php echo $this->renderPartial('_form', array('programStudi'=>$programStudi)); ?>