<?php
$this->breadcrumbs=array(
    'Program Studis'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label' => Yii::t('app','List Program Studi'), 'url' => array('index')),
    array('label' => Yii::t('app','Create Program Studi'), 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('program-studi-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h2><?php echo Yii::t('app','Management Program Studi') ?></h2>

<?php echo CHtml::link(Yii::t('app','Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
    'programStudi'=>$programStudi,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'program-studi-grid',
    'dataProvider'=>$programStudi->search(),
    'filter'=>$programStudi,
    'columns'=>array(
		'id',
		'nama',
		'jurusanId',
		'created',
		'modified',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
