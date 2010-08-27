<?php
$this->breadcrumbs=array(
    'Users'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label'=>'List User', 'url'=>array('index')),
    array('label'=>'Create User', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('user-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h2><?php echo Yii::t('app','Manajemen User') ?></h2>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
    'user'=>$user,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'user-grid',
    'dataProvider'=>$user->search(),
    'filter'=>$user,
    //'cssFile' => false,
    'columns'=>array(
        'id',
        'username',
        'password',
        'email',
        'created',
        'modified',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
