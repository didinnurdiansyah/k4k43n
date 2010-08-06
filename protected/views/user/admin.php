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
    $('.search-form').toggle('slow');
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

<div class="box">
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?><div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
        'user'=>$user,
    )); ?>
</div><!-- end.search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'user-grid',
    'dataProvider'=>$user->search(),
    'filter'=>$user,
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
</div>
