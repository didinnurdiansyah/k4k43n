<?php
$this->breadcrumbs=array(
    'Program Studis'=>array('index'),
    'Create',
);
$this->menu=array(
    array('label'=>'List ProgramStudi', 'url'=>array('index')),
    array('label'=>'Manage ProgramStudi', 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Create ProgramStudi')?></h2>

<?php echo $this->renderPartial('_form', array('programStudi'=>$programStudi)); ?>