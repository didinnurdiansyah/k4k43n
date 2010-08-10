<?php
$this->breadcrumbs=array(
    'Fakultases'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label' => Yii::t('app','List Fakultas'), 'url' => array('index')),
    array('label' => Yii::t('app','Manage Fakultas'), 'url' => array('admin')),
);
?>

<h2><?php echo Yii::t('app','Create New Fakultas') ?></h2>

<?php echo $this->renderPartial('_form', array('fakultas'=>$fakultas)); ?>