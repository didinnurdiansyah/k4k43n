<?php
/**
 * This is the template for generating the admin view for crud.
 * The following variables are available in this template:
 * - $ID: the primary key name
 * - $modelClass: the model class name
 * - $columns: a list of column schema objects
 */
?>
<?php
echo "<?php\n";
$label=$this->class2name($modelClass,true);
echo "\$this->breadcrumbs=array(
    '$label'=>array('index'),
    'Manage',
);\n";
?>

$this->menu=array(
    array('label'=>'List <?php echo $modelClass; ?>', 'url'=>array('index')),
    array('label'=>'Create <?php echo $modelClass; ?>', 'url'=>array('create')),
);
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('<?php echo $this->class2id($modelClass); ?>-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<div class="box">
<?php echo "<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>"; ?>
<div class="search-form" style="display:none">
    <?php echo "<?php \$this->renderPartial('_search',array(
        '".lcfirst($modelClass)."'=>\$".lcfirst($modelClass).",
    )); ?>\n"; ?>
</div><!-- end.search-form -->

<?php echo "<?php"; ?> $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'<?php echo $this->class2id($modelClass); ?>-grid',
    'dataProvider'=>$<?php echo lcfirst($modelClass)?>->search(),
    'filter'=>$<?php echo lcfirst($modelClass)?>,
    'columns'=>array(
<?php
$count=0;
foreach($columns as $column)
{
    if(++$count==7)
        echo "\t\t/*\n";
    echo "\t\t'".str_replace('_id','',$column->name)."',\n";
}
if($count>=7)
    echo "\t\t*/\n";
?>
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
</div>
