<?php
$this->breadcrumbs=array(
    'Program Kkns'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label' => Yii::t('app','List Program Kkn'), 'url' => array('index')),
    array('label' => Yii::t('app','Manage Program Kkn'), 'url' => array('admin')),
);
?>

<h2><?php echo Yii::t('app','Create New Program Kkn') ?></h2>

<?php echo $this->renderPartial('_form', array('programKkn'=>$programKkn)); ?>