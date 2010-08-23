<?php
$this->breadcrumbs=array(
    'Kabupatens',
);

$this->menu=array(
    array('label' => Yii::t('app','Create Kabupaten'), 'url' => array('create')),
    array('label' => Yii::t('app','Manage Kabupaten'), 'url' => array('admin')),
);
?>

<h2><?php echo Yii::t('app','List of Kabupaten') ?></h2>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', 
)); ?>
