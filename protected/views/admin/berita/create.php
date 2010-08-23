<?php
$this->breadcrumbs=array(
    'Beritas'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label' => Yii::t('app','List Berita'), 'url' => array('index')),
    array('label' => Yii::t('app','Manage Berita'), 'url' => array('admin')),
);
?>

<h2><?php echo Yii::t('app','Create New Berita') ?></h2>

<?php echo $this->renderPartial('_form', array('berita'=>$berita)); ?>