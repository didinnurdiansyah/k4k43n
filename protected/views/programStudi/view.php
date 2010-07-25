<?php
$this->breadcrumbs=array(
    'Program Studis'=>array('index'),
    $programStudi->id,
);
$this->menu=array(
    array('label'=>'List ProgramStudi', 'url'=>array('index')),
    array('label'=>'Create ProgramStudi', 'url'=>array('create')),
    array('label'=>'Update ProgramStudi', 'url'=>array('update', 'id'=>$programStudi->id)),
    array('label'=>'Delete ProgramStudi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$programStudi->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage ProgramStudi', 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','View ProgramStudi')?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$programStudi,
    'attributes'=>array(
		'id',
		'nama',
		'jurusanId',
		'created',
		'modified',
    ),
)); ?>
