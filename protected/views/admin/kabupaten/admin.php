<?php
$this->breadcrumbs=array(
    'Kabupatens'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label' => Yii::t('app','List Kabupaten'), 'url' => array('index')),
    array('label' => Yii::t('app','Create Kabupaten'), 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('kabupaten-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h2><?php echo Yii::t('app','Management Kabupaten') ?></h2>

<?php echo CHtml::link(Yii::t('app','Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
    'kabupaten'=>$kabupaten,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'kabupaten-grid',
    'dataProvider'=>$kabupaten->search(),
    'filter'=>$kabupaten,
    'columns'=>array(
        array(
            'header' => 'No',
            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',  
            'htmlOptions' => array('width' => '50px'),
        ),
        'nama',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
