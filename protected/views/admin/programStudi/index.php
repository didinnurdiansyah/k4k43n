<?php
$this->breadcrumbs=array(
    'Program Studis',
);

$this->menu=array(
    array('label' => Yii::t('app','Create ProgramStudi'), 'url' => array('create')),
    array('label' => Yii::t('app','Manage ProgramStudi'), 'url' => array('admin')),
);
?>

<h2><?php echo Yii::t('app','List of Program Studi') ?></h2>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', 
)); ?>
