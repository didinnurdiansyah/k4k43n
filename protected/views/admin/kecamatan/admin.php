<?php
$this->breadcrumbs=array(
    'Kecamatans'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label' => Yii::t('app','List Kecamatan'), 'url' => array('index')),
    array('label' => Yii::t('app','Create Kecamatan'), 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('kecamatan-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h2><?php echo Yii::t('app','Management Kecamatan') ?></h2>

<?php echo CHtml::link(Yii::t('app','Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
    'kecamatan'=>$kecamatan,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'kecamatan-grid',
    'dataProvider'=>$kecamatan->search(),
    'filter'=>$kecamatan,
    'columns'=>array(
        'id',
        'nama',
        array(
            'name' => 'kabupatenId',
            'value' => '$data->kabupaten->nama',
            'filter' => Kabupaten::model()->listData
        ),
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
