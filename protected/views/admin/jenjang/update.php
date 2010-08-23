<?php
$this->breadcrumbs=array(
    'Jenjangs'=>array('index'),
    $jenjang->id=>array('view','id'=>$jenjang->id),
    'Update',
);

$this->menu=array(
    array('label'=>Yii::t('app','List Jenjang'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Jenjang'), 'url'=>array('create')),
    array('label'=>Yii::t('app','View Jenjang'), 'url'=>array('view', 'id'=>$jenjang->id)),
    array('label'=>Yii::t('app','Manage Jenjang'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Update Jenjang') ?></h2>

<?php echo $this->renderPartial('_form', array('jenjang'=>$jenjang)); ?>