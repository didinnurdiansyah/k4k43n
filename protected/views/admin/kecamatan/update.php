<?php
$this->breadcrumbs=array(
    'Kecamatans'=>array('index'),
    $kecamatan->id=>array('view','id'=>$kecamatan->id),
    'Update',
);

$this->menu=array(
    array('label'=>Yii::t('app','List Kecamatan'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Kecamatan'), 'url'=>array('create')),
    array('label'=>Yii::t('app','View Kecamatan'), 'url'=>array('view', 'id'=>$kecamatan->id)),
    array('label'=>Yii::t('app','Manage Kecamatan'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Update Kecamatan') ?></h2>

<?php echo $this->renderPartial('_form', array('kecamatan'=>$kecamatan)); ?>