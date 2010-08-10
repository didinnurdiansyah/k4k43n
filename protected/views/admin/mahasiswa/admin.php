<?php
$this->breadcrumbs=array(
    'Mahasiswas'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label' => Yii::t('app','List Mahasiswa'), 'url' => array('index')),
    array('label' => Yii::t('app','Create Mahasiswa'), 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('mahasiswa-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h2><?php echo Yii::t('app','Management Mahasiswa') ?></h2>

<?php echo CHtml::link(Yii::t('app','Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
    'mahasiswa'=>$mahasiswa,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'mahasiswa-grid',
    'dataProvider'=>$mahasiswa->search(),
    'filter'=>$mahasiswa,
    'columns'=>array(
		'id',
		'namaLengkap',
		'alamatAsal',
		'alamatTinggal',
		'fakultasId',
		'jurusanId',
		/*
		'programStudiId',
		'jenisKelamin',
		'created',
		'modified',
		*/
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
