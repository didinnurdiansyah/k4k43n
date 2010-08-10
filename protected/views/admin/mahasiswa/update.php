<?php
$this->breadcrumbs=array(
    'Mahasiswas'=>array('index'),
    $mahasiswa->id=>array('view','id'=>$mahasiswa->id),
    'Update',
);

$this->menu=array(
    array('label'=>Yii::t('app','List Mahasiswa'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Mahasiswa'), 'url'=>array('create')),
    array('label'=>Yii::t('app','View Mahasiswa'), 'url'=>array('view', 'id'=>$mahasiswa->id)),
    array('label'=>Yii::t('app','Manage Mahasiswa'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Update Mahasiswa') ?></h2>

<?php echo $this->renderPartial('_form', array('mahasiswa'=>$mahasiswa)); ?>