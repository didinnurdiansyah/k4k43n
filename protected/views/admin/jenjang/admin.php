<?php
$this->breadcrumbs=array(
    'Jenjangs'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label' => Yii::t('app','List Jenjang'), 'url' => array('index')),
    array('label' => Yii::t('app','Create Jenjang'), 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('jenjang-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h2><?php echo Yii::t('app','Management Jenjang') ?></h2>

<?php echo CHtml::link(Yii::t('app','Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
    'jenjang'=>$jenjang,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'jenjang-grid',
    'dataProvider'=>$jenjang->search(),
    'filter'=>$jenjang,
    'columns'=>array(
		'id',
		'nama',
		'created',
		'modified',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
