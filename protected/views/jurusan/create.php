<?php
$this->breadcrumbs=array(
    'Jurusans'=>array('index'),
    'Create',
);
$this->menu=array(
    array('label'=>'List Jurusan', 'url'=>array('index')),
    array('label'=>'Manage Jurusan', 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Create Jurusan')?></h2>

<?php echo $this->renderPartial('_form', array('jurusan'=>$jurusan)); ?>