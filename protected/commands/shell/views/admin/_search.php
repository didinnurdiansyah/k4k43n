<?php
/**
 * This is the template for generating the form view for crud.
 * The following variables are available in this template:
 * - $ID: the primary key name
 * - $modelClass: the model class name
 * - $columns: a list of column schema objects
 */
?>
<div class="wide form">

<?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl(\$this->route),
    'method'=>'get',
    'htmlOptions'=>array('class' => 'yform columnar')
)); ?>\n"; ?>

<?php foreach($columns as $column): ?>
<?php
    $field=$this->generateInputField($modelClass,$column);
    if(strpos($field,'password')!==false)
        continue;
?>
    <p>
        <?php echo "<?php echo \$form->label(\$".lcfirst($modelClass).",'{$column->name}'); ?>\n"; ?>
        <?php echo "<?php ".$this->generateActiveField($modelClass,$column)."; ?>\n"; ?>
    </p>

<?php endforeach; ?>
    <?php echo "<?php echo CHtml::submitButton('Search'); ?>\n"; ?>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div><!-- search-form -->
