<?php
$this->breadcrumbs=array(
    'Fakultases'=>array('index'),
    $fakultas->id=>array('view','id'=>$fakultas->id),
    'Update',
);

$this->menu=array(
    array('label'=>Yii::t('app','List Fakultas'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Fakultas'), 'url'=>array('create')),
    array('label'=>Yii::t('app','View Fakultas'), 'url'=>array('view', 'id'=>$fakultas->id)),
    array('label'=>Yii::t('app','Manage Fakultas'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Update Fakultas') ?></h2>

<?php echo $this->renderPartial('_form', array('fakultas'=>$fakultas)); ?>