<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'jurusan-form',
    'enableAjaxValidation'=>true,
    'errorMessageCssClass' => 'error',
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($jurusan); ?>

    <div class="type-text">
        <?php echo $form->labelEx($jurusan,'nama'); ?>
        <?php echo $form->textField($jurusan,'nama',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($jurusan,'nama'); ?>
    </div>

    <div class="type-text">
        <?php echo $form->labelEx($jurusan,'kode'); ?>
        <?php echo $form->textField($jurusan,'kode',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($jurusan,'kode'); ?>
    </div>

    <div class="type-text">
        <?php echo $form->labelEx($jurusan,'fakultasId'); ?>
        <?php echo $form->textField($jurusan,'fakultasId',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($jurusan,'fakultasId'); ?>
    </div>

    <div class="type-button">
        <?php echo CHtml::submitButton($jurusan->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
