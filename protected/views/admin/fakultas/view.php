<?php
$this->breadcrumbs=array(
    'Fakultases'=>array('index'),
    $fakultas->id,
);

$this->menu=array(
    array('label'=>Yii::t('app','Daftar Fakultas'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Tambah Fakultas'), 'url'=>array('create')),
    array('label'=>Yii::t('app','Perbaharui Fakultas'), 'url'=>array('update', 'id'=>$fakultas->id)),
    array('label'=>Yii::t('app','Hapus Fakultas'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$fakultas->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h2><?php echo Yii::t('app','Detil Fakultas') ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$fakultas,
    'attributes'=>array(
        'id',
        'nama',
        'kode',
        'created',
        'modified',
    ),
)); ?>

<br/><br/>

<h2><?php echo Yii::t('app','Daftar Jurusan yang tersedia')?></h2>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'jurusan-grid',
    'dataProvider'=>$jurusan->search(),
    'filter'=>$jurusan,
    'columns'=>array(
        array(
            'header' => 'No',
            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',  
            'htmlOptions' => array('width' => '50px'),
        ),
        'nama',
        array(
            'name' => 'kode',
            'htmlOptions' => array('width' => '75px'),
        ),
        array(
            'class'=>'CButtonColumn',
            'viewButtonUrl' => 'array("jurusan/view","id" => $data->id)',
            'updateButtonUrl' => 'array("jurusan/update","id" => $data->id)',
            'deleteButtonUrl' => 'array("jurusan/delete","id" => $data->id)',
        ),
    ),
)); ?>


