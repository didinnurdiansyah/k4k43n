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
    '$label',
);\n";
?>

$this->menu=array(
    array('label' => Yii::t('app','Create <?php echo $this->modelClass; ?>'), 'url' => array('create')),
    array('label' => Yii::t('app','Manage <?php echo $this->modelClass; ?>'), 'url' => array('admin')),
);
?>

<h2><?php echo "<?php echo Yii::t('app','List of {$this->class2name($this->modelClass)}') ?>"?></h2>

<?php echo "<?php"; ?> $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view', 
)); ?>
