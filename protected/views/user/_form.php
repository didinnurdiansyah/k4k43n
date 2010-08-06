<div class="block" id="forms">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'user-form',
        'enableAjaxValidation'=>true,
        'errorMessageCssClass' => 'error',
    )); ?>
        <fieldset>
        <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary($user); ?>

            <p>
            <?php echo $form->labelEx($user,'username'); ?>
            <?php echo $form->textField($user,'username',array('size'=>60,'maxlength'=>255)); ?>
            <?php echo $form->error($user,'username'); ?>
        </p>

                <p>
            <?php echo $form->labelEx($user,'password'); ?>
            <?php echo $form->passwordField($user,'password',array('size'=>60,'maxlength'=>255)); ?>
            <?php echo $form->error($user,'password'); ?>
        </p>

                <p>
            <?php echo $form->labelEx($user,'email'); ?>
            <?php echo $form->textField($user,'email',array('size'=>60,'maxlength'=>255)); ?>
            <?php echo $form->error($user,'email'); ?>
        </p>

                <?php echo CHtml::submitButton($user->isNewRecord ? 'Create' : 'Save',array('class'=>'button')); ?>
        </fieldset>
    <?php $this->endWidget(); ?>
</div><!-- form -->
