<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<div class="form">

<?php echo "<?php \$form = \$this->beginWidget('CActiveForm', array(
    'id' => '".$this->class2id($this->modelClass)."-form',
    'enableAjaxValidation' => true,
)); ?>\n"; ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo "<?php echo \$form->errorSummary(\${$this->modelId}); ?>\n"; ?>

<?php
foreach($this->tableSchema->columns as $column)
{
    if($column->isPrimaryKey  || $column->name == 'created'  || $column->name == 'modified')
        continue;
?>
    <div class="row">
        <?php echo "<?php echo ".$this->generateActiveLabel($this->modelClass,$column)."; ?>\n"; ?>
        <?php echo "<?php echo ".$this->generateActiveField($this->modelClass,$column)."; ?>\n"; ?>
        <?php echo "<?php echo \$form->error(\${$this->modelId},'{$column->name}'); ?>\n"; ?>
    </div>

<?php
}
?>
    <div class="row buttons">
        <?php echo "<?php echo CHtml::submitButton(\${$this->modelId}->isNewRecord ? 'Create' : 'Save'); ?>\n"; ?>
    </div>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div><!-- form -->
