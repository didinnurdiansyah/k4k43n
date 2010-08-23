<?php
$this->breadcrumbs=array(
    'Kabupatens'=>array('index'),
    $kabupaten->id,
);

$this->menu=array(
    array('label'=>Yii::t('app','List Kabupaten'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Kabupaten'), 'url'=>array('create')),
    array('label'=>Yii::t('app','Update Kabupaten'), 'url'=>array('update', 'id'=>$kabupaten->id)),
    array('label'=>Yii::t('app','Delete Kabupaten'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$kabupaten->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>Yii::t('app','Manage Kabupaten'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','View Kabupaten') ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$kabupaten,
    'attributes'=>array(
        'id',
        'nama',
        'created',
        'modified',
    ),
)); ?>

<?php echo Yii::t('app','Daftar Kecamatan yang Tersedia')?>
<?php $this->widget('zii.widgets.grid.CGridView',array(
    'id'=>'kecamatan-grid',
    'dataProvider'=>$kecamatan->search(),
    'filter'=>$kecamatan,
    'columns'=>array(
        array(
            'header'=>'No',
            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
            'htmlOptions' => array('width' => '50px'),
        ),
        'nama',
        array(
            'class'=>'CButtonColumn',
            'viewButtonUrl' => 'array("admin/kecamatan/view","id" => $data->id)',
            'updateButtonUrl' => 'array("admin/kecamatan/update","id" => $data->id)',
            'deleteButtonUrl' => 'array("admin/kecamatan/delete","id" => $data->id)',
              ),
                     ),
                                                       ));
?>