<?php
$this->breadcrumbs=array(
    'Fakultases'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label' => Yii::t('app','Create Fakultas'), 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('fakultas-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h2><?php echo Yii::t('app','Daftar Fakultas') ?></h2>

<?php echo CHtml::link(Yii::t('app','Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
    'fakultas'=>$fakultas,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'fakultas-grid',
    'dataProvider'=>$fakultas->search(),
    'filter'=>$fakultas,
    'columns'=>array(
        array(
            'header' => 'No',
            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',  
            'htmlOptions' => array('width' => '50px'),
        ),
        'nama',
        'kode',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
