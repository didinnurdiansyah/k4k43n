<?php
$this->breadcrumbs=array(
    'Kelompoks',
);

$this->menu=array(
    array('label' => Yii::t('app','Create Kelompok'), 'url' => array('create')),
    array('label' => Yii::t('app','Manage Kelompok'), 'url' => array('admin')),
);
?>

<h2><?php echo Yii::t('app','List of Kelompok') ?></h2>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', 
)); ?>
