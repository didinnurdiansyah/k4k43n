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
    'Create',
);\n";
?>

$this->menu=array(
    array('label' => Yii::t('app','List <?php echo $this->modelClass; ?>'), 'url' => array('index')),
    array('label' => Yii::t('app','Manage <?php echo $this->modelClass; ?>'), 'url' => array('admin')),
);
?>

<h2><?php echo "<?php echo Yii::t('app','Create New {$this->class2name($this->modelClass)}') ?>"?></h2>

<?php echo "<?php echo \$this->renderPartial('_form', array('{$this->modelId}'=>\${$this->modelId})); ?>"; ?>
