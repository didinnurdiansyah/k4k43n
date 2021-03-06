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
    \${$this->modelId}->{$nameColumn}=>array('view','id'=>\${$this->modelId}->{$this->tableSchema->primaryKey}),
    'Update',
);\n";
?>

$this->menu=array(
    array('label'=>Yii::t('app','List <?php echo $this->class2name($this->modelClass)?>'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create <?php echo $this->class2name($this->modelClass)?>'), 'url'=>array('create')),
    array('label'=>Yii::t('app','View <?php echo $this->class2name($this->modelClass)?>'), 'url'=>array('view', 'id'=>$<?php echo $this->modelId?>-><?php echo $this->tableSchema->primaryKey; ?>)),
    array('label'=>Yii::t('app','Manage <?php echo $this->class2name($this->modelClass)?>'), 'url'=>array('admin')),
);
?>

<h2><?php echo "<?php echo Yii::t('app','Update {$this->class2name($this->modelClass)}') ?>"?></h2>

<?php echo "<?php echo \$this->renderPartial('_form', array('{$this->modelId}'=>\${$this->modelId})); ?>"; ?>
