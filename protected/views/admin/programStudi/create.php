<?php
$this->breadcrumbs=array(
    'Program Studis'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label' => Yii::t('app','List ProgramStudi'), 'url' => array('index')),
    array('label' => Yii::t('app','Manage ProgramStudi'), 'url' => array('admin')),
);
?>

<h2><?php echo Yii::t('app','Create New Program Studi') ?></h2>

<?php echo $this->renderPartial('_form', array('programStudi'=>$programStudi)); ?>