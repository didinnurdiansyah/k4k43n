<?php
/**
 * This is the template for generating the update view for crud.
 * The following variables are available in this template:
 * - $ID: the primary key name
 * - $modelClass: the model class name
 * - $columns: a list of column schema objects
 */
?>
<?php
echo "<?php\n";
$nameColumn=$this->guessNameColumn($columns);
$label=$this->class2name($modelClass,true);
echo "\$this->breadcrumbs=array(
    '$label'=>array('index'),
    \$".lcfirst($modelClass)."->{$nameColumn}=>array('view','id'=>\$".lcfirst($modelClass)."->{$ID}),
    'Update',
);\n";
?>
$this->menu=array(
    array('label'=>'List <?php echo $modelClass; ?>', 'url'=>array('index')),
    array('label'=>'Create <?php echo $modelClass; ?>', 'url'=>array('create')),
    array('label'=>'View <?php echo $modelClass; ?>', 'url'=>array('view', 'id' => $<?php echo lcfirst($modelClass)?>-><?php echo $ID; ?>)),
    array('label'=>'Manage <?php echo $modelClass; ?>', 'url'=>array('admin')),
);
?>

<h2><?php echo "<?php echo Yii::t('app','Update $modelClass')?>"?></h2>

<?php echo "<?php echo \$this->renderPartial('_form', array('".lcfirst($modelClass)."'=>\$".lcfirst($modelClass).")); ?>"; ?>
