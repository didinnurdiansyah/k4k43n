<?php
$this->breadcrumbs=array(
    'Kabupatens'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label' => Yii::t('app','List Kabupaten'), 'url' => array('index')),
    array('label' => Yii::t('app','Manage Kabupaten'), 'url' => array('admin')),
);
?>

<h2><?php echo Yii::t('app','Create New Kabupaten') ?></h2>

<?php echo $this->renderPartial('_form', array('kabupaten'=>$kabupaten)); ?>