<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'jenjang-form',
    'enableAjaxValidation' => true,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($jenjang); ?>

    <div class="row">
        <?php echo $form->labelEx($jenjang,'nama'); ?>
        <?php echo $form->textField($jenjang,'nama',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($jenjang,'nama'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($jenjang->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
