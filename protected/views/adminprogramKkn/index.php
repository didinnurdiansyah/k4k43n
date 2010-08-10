<?php
$this->breadcrumbs=array(
    'Program Kkns',
);

$this->menu=array(
    array('label' => Yii::t('app','Create ProgramKkn'), 'url' => array('create')),
    array('label' => Yii::t('app','Manage ProgramKkn'), 'url' => array('admin')),
);
?>

<h2><?php echo Yii::t('app','List of Program Kkn') ?></h2>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', 
)); ?>
