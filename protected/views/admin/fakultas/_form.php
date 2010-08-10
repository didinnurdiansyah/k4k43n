<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'fakultas-form',
    'enableAjaxValidation' => true,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($fakultas); ?>

    <div class="row">
        <?php echo $form->labelEx($fakultas,'nama'); ?>
        <?php echo $form->textField($fakultas,'nama',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($fakultas,'nama'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($fakultas,'kode'); ?>
        <?php echo $form->textField($fakultas,'kode',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($fakultas,'kode'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($fakultas->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
