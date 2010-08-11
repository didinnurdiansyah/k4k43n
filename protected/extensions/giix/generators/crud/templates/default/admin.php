<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php
echo "<?php\n";
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
    '$label'=>array('index'),
    'Manage',
);\n";
?>

$this->menu=array(
    array('label' => Yii::t('app','List <?php echo $this->class2name($this->modelClass)?>'), 'url' => array('index')),
    array('label' => Yii::t('app','Create <?php echo $this->class2name($this->modelClass)?>'), 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('<?php echo $this->class2id($this->modelClass); ?>-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h2><?php echo "<?php echo Yii::t('app','Management {$this->class2name($this->modelClass)}') ?>"?></h2>

<?php echo "<?php echo CHtml::link(Yii::t('app','Advanced Search'),'#',array('class'=>'search-button')); ?>"; ?>

<div class="search-form" style="display:none">
<?php echo "<?php \$this->renderPartial('_search',array(
    '{$this->modelId}'=>\${$this->modelId},
)); ?>\n"; ?>
</div><!-- search-form -->

<?php echo "<?php"; ?> $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
    'dataProvider'=>$<?php echo $this->modelId?>->search(),
    'filter'=>$<?php echo $this->modelId?>,
    'columns'=>array(
<?php
$count=0;
foreach($this->tableSchema->columns as $column)
{
    if(++$count==7)
        echo "\t\t/*\n";
    echo "\t\t'".$column->name."',\n";
}
if($count>=7)
    echo "\t\t*/\n";
?>
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
