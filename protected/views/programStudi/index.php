<?php
$this->breadcrumbs=array(
    'Program Studis',
);
$this->menu=array(
    array('label'=>'Create ProgramStudi', 'url'=>array('create')),
    array('label'=>'Manage ProgramStudi', 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','List ProgramStudi')?></h2>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
)); ?>
