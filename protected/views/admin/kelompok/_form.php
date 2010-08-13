<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'kelompok-form',
    'enableAjaxValidation' => true,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($kelompok); ?>

    <div class="row">
        <?php echo $form->labelEx($kelompok,'lokasi'); ?>
        <?php echo $form->textField($kelompok,'lokasi',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($kelompok,'lokasi'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($kelompok,'kabupatenId'); ?>
        <?php echo $form->dropDownList($kelompok,'kabupatenId',Kabupaten::model()->listData); ?>
        <?php echo $form->error($kelompok,'kabupatenId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($kelompok,'kecamatanId'); ?>
        <?php echo $form->dropDownList($kelompok,'kecamatanId',Kecamatan::model()->listData); ?>
        <?php echo $form->error($kelompok,'kecamatanId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($kelompok,'programKknId'); ?>
        <?php echo $form->dropDownList($kelompok,'programKknId',ProgramKkn::model()->listData); ?>
        <?php echo $form->error($kelompok,'programKknId'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($kelompok->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
