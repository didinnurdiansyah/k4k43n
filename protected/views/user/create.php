<?php
$this->breadcrumbs=array(
    'Users'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label'=>'List User', 'url'=>array('index')),
    array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Membuat User Baru') ?></h2>

<?php echo $this->renderPartial('_form', array('user'=>$user)); ?>