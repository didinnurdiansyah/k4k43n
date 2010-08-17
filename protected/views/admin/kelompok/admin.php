<?php
$this->breadcrumbs=array(
    'Kelompoks'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label' => Yii::t('app','Create Kelompok'), 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('kelompok-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h2><?php echo Yii::t('app','Management Kelompok') ?></h2>

<div class="note">
    <?php echo Yii::t('app','Jumlah Maksimal Mahasiswa Perkelompok: <b>{jumlah}</b> orang', array(
        '{jumlah}' => Kelompok::model()->maxAnggota
    ))?>
</div>
<br/>

<?php echo CHtml::link(Yii::t('app','Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
    'kelompok'=>$kelompok,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'kelompok-grid',
    'dataProvider'=>$kelompok->search(),
    'filter'=>$kelompok,
    'columns'=>array(
        array(
            'header' => 'No',
            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',  
            'htmlOptions' => array('width' => '50px'),
        ),
        array(
            'name'=>'programKknId',
            'value'=>'$data->programKkn->nama',
            'filter'=>ProgramKkn::model()->listData,
        ),
        array(
            'name'=>'kabupatenId',
            'value'=>'$data->kabupaten->nama',
            'filter'=>Kabupaten::model()->listData,
        ), 
        array(
            'name'=>'kecamatanId',
            'value'=>'$data->kecamatan->nama',
            'filter'=>Kecamatan::model()->listData,
        ),
        'lokasi',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
