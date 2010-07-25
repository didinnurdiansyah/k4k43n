<?php
$this->breadcrumbs=array(
    'Program Studis'=>array('index'),
    $programStudi->id=>array('view','id'=>$programStudi->id),
    'Update',
);
$this->menu=array(
    array('label'=>'List ProgramStudi', 'url'=>array('index')),
    array('label'=>'Create ProgramStudi', 'url'=>array('create')),
    array('label'=>'View ProgramStudi', 'url'=>array('view', 'id' => $programStudi->id)),
    array('label'=>'Manage ProgramStudi', 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Update ProgramStudi')?></h2>

<?php echo $this->renderPartial('_form', array('programStudi'=>$programStudi)); ?>