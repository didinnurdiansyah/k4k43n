<?php
$this->breadcrumbs=array(
    'Fakultases'=>array('index'),
    $fakultas->id=>array('view','id'=>$fakultas->id),
    'Update',
);

$this->menu=array(
    array('label'=>Yii::t('app','Daftar Fakultas'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Tambah Fakultas'), 'url'=>array('create')),
    array('label'=>Yii::t('app','Detail Fakultas'), 'url'=>array('view', 'id'=>$fakultas->id)),
);
?>

<h2><?php echo Yii::t('app','Update Fakultas') ?></h2>

<?php echo $this->renderPartial('_form', array('fakultas'=>$fakultas)); ?>
