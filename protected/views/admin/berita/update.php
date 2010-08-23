<?php
$this->breadcrumbs=array(
    'Beritas'=>array('index'),
    $berita->title=>array('view','id'=>$berita->id),
    'Update',
);

$this->menu=array(
    array('label'=>Yii::t('app','List Berita'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Berita'), 'url'=>array('create')),
    array('label'=>Yii::t('app','View Berita'), 'url'=>array('view', 'id'=>$berita->id)),
    array('label'=>Yii::t('app','Manage Berita'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Update Berita') ?></h2>

<?php echo $this->renderPartial('_form', array('berita'=>$berita)); ?>