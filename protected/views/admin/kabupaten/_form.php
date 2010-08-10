<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'kabupaten-form',
    'enableAjaxValidation' => true,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($kabupaten); ?>

    <div class="row">
        <?php echo $form->labelEx($kabupaten,'nama'); ?>
        <?php echo $form->textField($kabupaten,'nama',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($kabupaten,'nama'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($kabupaten->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->