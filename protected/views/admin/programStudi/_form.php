<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'program-studi-form',
    'enableAjaxValidation' => true,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($programStudi); ?>

    <div class="row">
        <?php echo $form->labelEx($programStudi,'nama'); ?>
        <?php echo $form->textField($programStudi,'nama',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($programStudi,'nama'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($programStudi,'jurusanId'); ?>
        <?php echo $form->textField($programStudi,'jurusanId',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($programStudi,'jurusanId'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($programStudi->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
