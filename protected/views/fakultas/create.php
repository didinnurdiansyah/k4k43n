<?php
$this->breadcrumbs=array(
    'Fakultases'=>array('index'),
    'Create',
);
$this->menu=array(
    array('label'=>'List Fakultas', 'url'=>array('index')),
    array('label'=>'Manage Fakultas', 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Create Fakultas')?></h2>

<?php echo $this->renderPartial('_form', array('fakultas'=>$fakultas)); ?>