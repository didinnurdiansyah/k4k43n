<?php
$this->breadcrumbs=array(
    'Kelompoks'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label' => Yii::t('app','List Kelompok'), 'url' => array('index')),
);
?>

<h2><?php echo Yii::t('app','Create New Kelompok') ?></h2>

<?php echo $this->renderPartial('_form', array('kelompok'=>$kelompok)); ?>
