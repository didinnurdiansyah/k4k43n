<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'kelompok-form',
    'enableAjaxValidation' => true,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($kelompok); ?>

    <div class="row">
        <?php echo $form->labelEx($kelompok,'nama'); ?>
        <?php echo $form->textField($kelompok,'nama',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($kelompok,'nama'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($kelompok,'kabupatenId'); ?>
        <?php echo $form->textField($kelompok,'kabupatenId',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($kelompok,'kabupatenId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($kelompok,'kecamatanId'); ?>
        <?php echo $form->textField($kelompok,'kecamatanId',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($kelompok,'kecamatanId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($kelompok,'programKknId'); ?>
        <?php echo $form->textField($kelompok,'programKknId',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($kelompok,'programKknId'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($kelompok->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
