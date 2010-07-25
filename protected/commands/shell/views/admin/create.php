<?php
/**
 * This is the template for generating the create view for crud.
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
    'Create',
);\n";
?>
$this->menu=array(
    array('label'=>'List <?php echo $modelClass; ?>', 'url'=>array('index')),
    array('label'=>'Manage <?php echo $modelClass; ?>', 'url'=>array('admin')),
);
?>

<h2><?php echo "<?php echo Yii::t('app','Create $modelClass')?>"?></h2>

<?php echo "<?php echo \$this->renderPartial('_form', array('".lcfirst($modelClass)."'=>\$".lcfirst($modelClass).")); ?>"; ?>
