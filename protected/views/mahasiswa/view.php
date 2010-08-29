<?php
$this->breadcrumbs=array(
    'Mahasiswa'=>array('index'),
    $mahasiswa->id,
);

$this->menu=array(
    array('label'=>'List User', 'url'=>array('index')),
    array('label'=>'Create User', 'url'=>array('create')),
    //array('label'=>'Update User', 'url'=>array('update', 'id'=>$user->id)),
    //array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$user->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','Detail User')?></h2>
<?php $this->widget('zii.widgets.CDetailView',array(
        'data'=>$mahasiswa,
        'attributes'=>array(
            'id',
            'namaLengkap',
            'alamatTinggal',            
        )
    ));
?>
<?php echo CHtml::link(Yii::t('app','edit'),array('mahasiswa/update','id'=>$mahasiswa->id));?>