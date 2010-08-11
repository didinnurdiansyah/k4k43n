<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'kecamatan-form',
    'enableAjaxValidation' => true,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($kecamatan); ?>

    <div class="row">
        <?php echo $form->labelEx($kecamatan,'nama'); ?>
        <?php echo $form->textField($kecamatan,'nama',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($kecamatan,'nama'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($kecamatan,'kabupatenId'); ?>
        <?php echo $form->textField($kecamatan,'kabupatenId',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($kecamatan,'kabupatenId'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($kecamatan->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
