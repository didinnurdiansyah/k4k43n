<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'user-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($user); ?>

    <div class="row">
        <?php echo $form->labelEx($user,'username'); ?>
        <?php echo $form->textField($user,'username',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($user,'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($user,'password'); ?>
        <?php echo $form->passwordField($user,'password',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($user,'password'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($user,'email'); ?>
        <?php echo $form->textField($user,'email',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($user,'email'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($user->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
