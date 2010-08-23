<?php
$this->breadcrumbs=array(
    'Jurusans'=>array('index'),
    $jurusan->id,
);

$this->menu=array(
    array('label'=>Yii::t('app','List Jurusan'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Jurusan'), 'url'=>array('create')),
    array('label'=>Yii::t('app','Update Jurusan'), 'url'=>array('update', 'id'=>$jurusan->id)),
    array('label'=>Yii::t('app','Delete Jurusan'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$jurusan->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>Yii::t('app','Manage Jurusan'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','View Jurusan') ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$jurusan,
    'attributes'=>array(
        'id',
        'nama',
        'kode',
        array(
            'name' => 'fakultasId',
            'value' => $jurusan->fakultas->nama,
        ),
        'created',
        'modified',
    ),
)); ?>
