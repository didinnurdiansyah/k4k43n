<?php
$this->breadcrumbs=array(
    'Fakultases'=>array('index'),
    'Manage',
);
$this->menu=array(
    array('label'=>'List Fakultas', 'url'=>array('index')),
    array('label'=>'Create Fakultas', 'url'=>array('create')),
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

           
            
<h2><?php echo Yii::t('app','Manage Fakultas')?></h2>
<p>You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?><div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
        'fakultas'=>$fakultas,
    )); ?>
</div><!-- end.search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'fakultas-grid',
    'dataProvider'=>$fakultas->search(),
    'filter'=>$fakultas,
    'columns'=>array(
		'id',
		'nama',
		'kode',
		'created',
		'modified',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
            
