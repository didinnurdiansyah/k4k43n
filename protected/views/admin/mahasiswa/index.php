<?php
$this->breadcrumbs=array(
    'Mahasiswas',
);

$this->menu=array(
    array('label' => Yii::t('app','Create Mahasiswa'), 'url' => array('create')),
);
?>

<h2><?php echo Yii::t('app','List of Mahasiswa') ?></h2>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', 
)); ?>
