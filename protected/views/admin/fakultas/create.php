<?php
$this->breadcrumbs=array(
    'Fakultases'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label' => Yii::t('app','Daftar Fakultas'), 'url' => array('index')),
);
?>

<h2><?php echo Yii::t('app','Tambah Fakultas') ?></h2>

<?php echo $this->renderPartial('_form', array('fakultas'=>$fakultas)); ?>
