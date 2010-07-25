<?php
$this->breadcrumbs=array(
    'Jurusans'=>array('index'),
    $jurusan->id=>array('view','id'=>$jurusan->id),
    'Update',
);
$this->menu=array(
    array('label'=>'List Jurusan', 'url'=>array('index')),
    array('label'=>'Create Jurusan', 'url'=>array('create')),
    array('label'=>'View Jurusan', 'url'=>array('view', 'id' => $jurusan->id)),
    array('label'=>'Manage Jurusan', 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Update Jurusan')?></h2>

<?php echo $this->renderPartial('_form', array('jurusan'=>$jurusan)); ?>