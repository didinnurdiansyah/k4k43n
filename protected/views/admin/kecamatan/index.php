<?php
$this->breadcrumbs=array(
    'Kecamatans',
);

$this->menu=array(
    array('label' => Yii::t('app','Create Kecamatan'), 'url' => array('create')),
    array('label' => Yii::t('app','Manage Kecamatan'), 'url' => array('admin')),
);
?>

<h2><?php echo Yii::t('app','List of Kecamatan') ?></h2>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', 
)); ?>
