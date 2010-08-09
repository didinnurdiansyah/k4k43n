<?php
$this->breadcrumbs=array(
    'Kabupatens'=>array('index'),
    $kabupaten->id=>array('view','id'=>$kabupaten->id),
    'Update',
);

$this->menu=array(
    array('label'=>Yii::t('app','List Kabupaten'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Kabupaten'), 'url'=>array('create')),
    array('label'=>Yii::t('app','View Kabupaten'), 'url'=>array('view', 'id'=>$kabupaten->id)),
    array('label'=>Yii::t('app','Manage Kabupaten'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Update Kabupaten') ?></h2>

<?php echo $this->renderPartial('_form', array('kabupaten'=>$kabupaten)); ?>