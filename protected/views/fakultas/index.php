<?php
$this->breadcrumbs=array(
    'Fakultases',
);
$this->menu=array(
    array('label'=>'Create Fakultas', 'url'=>array('create')),
    array('label'=>'Manage Fakultas', 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','List Fakultas')?></h2>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
)); ?>
