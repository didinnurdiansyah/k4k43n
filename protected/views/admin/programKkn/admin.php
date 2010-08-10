<?php
$this->breadcrumbs=array(
    'Program Kkns'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label' => Yii::t('app','List ProgramKkn'), 'url' => array('index')),
    array('label' => Yii::t('app','Create ProgramKkn'), 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('program-kkn-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h2><?php echo Yii::t('app','Management Program Kkn') ?></h2>

<?php echo CHtml::link(Yii::t('app','Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
    'programKkn'=>$programKkn,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'program-kkn-grid',
    'dataProvider'=>$programKkn->search(),
    'filter'=>$programKkn,
    'columns'=>array(
		'id',
		'nama',
		'deskripsi',
		'created',
		'modified',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
