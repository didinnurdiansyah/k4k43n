<?php
$this->breadcrumbs=array(
    'Jenjangs'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label' => Yii::t('app','List Jenjang'), 'url' => array('index')),
    array('label' => Yii::t('app','Manage Jenjang'), 'url' => array('admin')),
);
?>

<h2><?php echo Yii::t('app','Create New Jenjang') ?></h2>

<?php echo $this->renderPartial('_form', array('jenjang'=>$jenjang)); ?>