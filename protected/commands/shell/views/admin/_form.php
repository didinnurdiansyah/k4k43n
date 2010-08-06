<?php
/**
 * This is the template for generating the form view for crud.
 * The following variables are available in this template:
 * - $ID: the primary key name
 * - $modelClass: the model class name
 * - $columns: a list of column schema objects
 */
?>
<div class="block" id="forms">
    <?php echo "<?php \$form=\$this->beginWidget('CActiveForm', array(
        'id'=>'".$this->class2id($modelClass)."-form',
        'enableAjaxValidation'=>true,
        'errorMessageCssClass' => 'error',
    )); ?>\n";?>
        <fieldset>
        <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo "<?php echo \$form->errorSummary(\$".lcfirst($modelClass)."); ?>\n"; ?>

    <?php
    foreach($columns as $column)
    {
        if($column->isPrimaryKey)
            continue;
        if($column->name == 'created' || $column->name == 'modified')
            continue;
    ?>
        <p>
            <?php echo "<?php echo ".$this->generateActiveLabel($modelClass,$column)."; ?>\n"; ?>
            <?php echo "<?php ".$this->generateActiveField($modelClass,$column)."; ?>\n"; ?>
            <?php echo "<?php echo \$form->error(\$".lcfirst($modelClass).",'{$column->name}'); ?>\n"; ?>
        </p>

        <?php
        }
        ?>
        <?php echo "<?php echo CHtml::submitButton(\$".lcfirst($modelClass)."->isNewRecord ? 'Create' : 'Save',array('class'=>'button')); ?>\n"; ?>
        </fieldset>
    <?php echo "<?php \$this->endWidget(); ?>\n"; ?>
</div><!-- form -->
