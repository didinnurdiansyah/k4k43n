<?php
$this->breadcrumbs=array(
    'Jurusans',
);

$this->menu=array(
    array('label' => Yii::t('app','Create Jurusan'), 'url' => array('create')),
    array('label' => Yii::t('app','Manage Jurusan'), 'url' => array('admin')),
);
?>

<h2><?php echo Yii::t('app','List of Jurusan') ?></h2>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', 
)); ?>
