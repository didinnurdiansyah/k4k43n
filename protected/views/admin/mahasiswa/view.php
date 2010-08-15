<?php
$this->breadcrumbs=array(
    'Mahasiswas'=>array('index'),
    $mahasiswa->id,
);

$this->menu=array(
    array('label'=>Yii::t('app','List Mahasiswa'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Mahasiswa'), 'url'=>array('create')),
    array('label'=>Yii::t('app','Update Mahasiswa'), 'url'=>array('update', 'id'=>$mahasiswa->id)),
    array('label'=>Yii::t('app','Delete Mahasiswa'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$mahasiswa->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>Yii::t('app','Manage Mahasiswa'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','View Mahasiswa') ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$mahasiswa,
    'attributes'=>array(
        'id',
        'namaLengkap',
        'nim',
        'alamatAsal',
        'alamatTinggal',
        'fakultasId',
        'jurusanId',
        'kelompokId',
        'jenjangId',
        'jenisKelamin',
        'created',
        'modified',
    ),
)); ?>
