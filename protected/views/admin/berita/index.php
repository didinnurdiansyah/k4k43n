<?php
$this->breadcrumbs=array(
    'Beritas',
);

$this->menu=array(
    array('label' => Yii::t('app','Create Berita'), 'url' => array('create')),
    array('label' => Yii::t('app','Manage Berita'), 'url' => array('admin')),
);
?>

<h2><?php echo Yii::t('app','List of Berita') ?></h2>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', 
)); ?>
