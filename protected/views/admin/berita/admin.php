<?php
$this->breadcrumbs=array(
    'Beritas'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label' => Yii::t('app','List Berita'), 'url' => array('index')),
    array('label' => Yii::t('app','Create Berita'), 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('berita-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h2><?php echo Yii::t('app','Management Berita') ?></h2>

<?php echo CHtml::link(Yii::t('app','Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
    'berita'=>$berita,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'berita-grid',
    'dataProvider'=>$berita->search(),
    'filter'=>$berita,
    'columns'=>array(
        array(
            'header' => 'No',
            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',  
            'htmlOptions' => array('width' => '50px'),
        ),
        'title',
        'created',
        'modified',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
