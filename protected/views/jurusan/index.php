<?php
$this->breadcrumbs=array(
    'Jurusans',
);
$this->menu=array(
    array('label'=>'Create Jurusan', 'url'=>array('create')),
    array('label'=>'Manage Jurusan', 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','List Jurusan')?></h2>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
)); ?>
