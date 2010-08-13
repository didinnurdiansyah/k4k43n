<?php
$this->breadcrumbs=array(
    'Kelompoks'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label' => Yii::t('app','List Kelompok'), 'url' => array('index')),
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
		'id',
		'lokasi',
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
		array(
			'name'=>'programKknId',
			'value'=>'$data->programKkn->nama',
			'filter'=>ProgramKkn::model()->listData,
			  ),
		'created',
		/*
		'modified',
		*/
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
