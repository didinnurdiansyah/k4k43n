<?php
$this->breadcrumbs=array(
    'Fakultases',
);

$this->menu=array(
    array('label' => Yii::t('app','Tambah Fakultas'), 'url' => array('create')),
);
?>

<h2><?php echo Yii::t('app','Daftar Fakultas') ?></h2>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', 
)); ?>
