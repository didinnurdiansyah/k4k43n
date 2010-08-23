<?php
$this->breadcrumbs=array(
    'Jenjangs',
);

$this->menu=array(
    array('label' => Yii::t('app','Create Jenjang'), 'url' => array('create')),
    array('label' => Yii::t('app','Manage Jenjang'), 'url' => array('admin')),
);
?>

<h2><?php echo Yii::t('app','List of Jenjang') ?></h2>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', 
)); ?>
