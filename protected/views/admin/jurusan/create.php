<?php
$this->breadcrumbs=array(
    'Jurusans'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label' => Yii::t('app','List Jurusan'), 'url' => array('index')),
    array('label' => Yii::t('app','Manage Jurusan'), 'url' => array('admin')),
);
?>

<h2><?php echo Yii::t('app','Create New Jurusan') ?></h2>

<?php echo $this->renderPartial('_form', array('jurusan'=>$jurusan)); ?>