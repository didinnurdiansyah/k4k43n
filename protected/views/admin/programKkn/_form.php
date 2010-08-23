<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'program-kkn-form',
    'enableAjaxValidation' => true,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($programKkn); ?>

    <div class="row">
        <?php echo $form->labelEx($programKkn,'nama'); ?>
        <?php echo $form->textField($programKkn,'nama',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($programKkn,'nama'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($programKkn,'deskripsi'); ?>
        <?php echo $form->textArea($programKkn,'deskripsi',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($programKkn,'deskripsi'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($programKkn->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
