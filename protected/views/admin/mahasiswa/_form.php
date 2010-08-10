<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'mahasiswa-form',
    'enableAjaxValidation' => true,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($mahasiswa); ?>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'namaLengkap'); ?>
        <?php echo $form->textField($mahasiswa,'namaLengkap',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($mahasiswa,'namaLengkap'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'alamatAsal'); ?>
        <?php echo $form->textField($mahasiswa,'alamatAsal',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($mahasiswa,'alamatAsal'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'alamatTinggal'); ?>
        <?php echo $form->textField($mahasiswa,'alamatTinggal',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($mahasiswa,'alamatTinggal'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'fakultasId'); ?>
        <?php echo $form->textField($mahasiswa,'fakultasId',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($mahasiswa,'fakultasId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'jurusanId'); ?>
        <?php echo $form->textField($mahasiswa,'jurusanId',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($mahasiswa,'jurusanId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'programStudiId'); ?>
        <?php echo $form->textField($mahasiswa,'programStudiId',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($mahasiswa,'programStudiId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'jenisKelamin'); ?>
        <?php echo $form->textField($mahasiswa,'jenisKelamin'); ?>
        <?php echo $form->error($mahasiswa,'jenisKelamin'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($mahasiswa->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
