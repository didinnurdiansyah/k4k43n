<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php
echo "<?php\n";
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
    '$label'=>array('index'),
    \${$this->modelId}->{$nameColumn},
);\n";
?>

$this->menu=array(
    array('label'=>Yii::t('app','List <?php echo $this->modelClass; ?>'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create <?php echo $this->modelClass; ?>'), 'url'=>array('create')),
    array('label'=>Yii::t('app','Update <?php echo $this->modelClass; ?>'), 'url'=>array('update', 'id'=>$<?php echo $this->modelId?>-><?php echo $this->tableSchema->primaryKey; ?>)),
    array('label'=>Yii::t('app','Delete <?php echo $this->modelClass; ?>'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$<?php echo $this->modelId?>-><?php echo $this->tableSchema->primaryKey; ?>),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>Yii::t('app','Manage <?php echo $this->modelClass; ?>'), 'url'=>array('admin')),
);
?>

<h2><?php echo "<?php echo Yii::t('app','View {$this->class2name($this->modelClass)}') ?>"?></h2>

<?php echo "<?php"; ?> $this->widget('zii.widgets.CDetailView', array(
    'data'=>$<?php echo $this->modelId?>,
    'attributes'=>array(
<?php foreach($this->tableSchema->columns as $column):?>
        <?php echo "'{$column->name}',\n";?>
<?php endforeach?>
    ),
)); ?>
