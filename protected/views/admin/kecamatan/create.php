<?php
$this->breadcrumbs=array(
    'Kecamatans'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label' => Yii::t('app','List Kecamatan'), 'url' => array('index')),
    array('label' => Yii::t('app','Manage Kecamatan'), 'url' => array('admin')),
);
?>

<h2><?php echo Yii::t('app','Create New Kecamatan') ?></h2>

<?php echo $this->renderPartial('_form', array('kecamatan'=>$kecamatan)); ?>