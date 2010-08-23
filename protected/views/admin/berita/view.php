<?php
$this->breadcrumbs=array(
    'Beritas'=>array('index'),
    $berita->title,
);

$this->menu=array(
    array('label'=>Yii::t('app','List Berita'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Berita'), 'url'=>array('create')),
    array('label'=>Yii::t('app','Update Berita'), 'url'=>array('update', 'id'=>$berita->id)),
    array('label'=>Yii::t('app','Delete Berita'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$berita->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>Yii::t('app','Manage Berita'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','View Berita') ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$berita,
    'attributes'=>array(
        'id',
        'title',
        //'body',
        array(
            'name' => 'body',
            'value' => $berita->body,
            //'encode' => false,
        ),
        'created',
        'modified',
    ),
)); ?>
