<?php
$this->breadcrumbs=array(
    'Jurusans'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label' => Yii::t('app','List Jurusan'), 'url' => array('index')),
    array('label' => Yii::t('app','Create Jurusan'), 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('jurusan-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h2><?php echo Yii::t('app','Management Jurusan') ?></h2>

<?php echo CHtml::link(Yii::t('app','Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
    'jurusan'=>$jurusan,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'jurusan-grid',
    'dataProvider'=>$jurusan->search(),
    'filter'=>$jurusan,
    'columns'=>array(
		'id',
		'nama',
		'kode',
		'fakultasId',
		'created',
		'modified',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
