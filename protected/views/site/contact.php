<?php
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
    'Contact',
);
?>
<h2 id="page-heading"><?php echo Yii::t('app','Contact Us')?></h2>
<div class="box">
    <?php if(Yii::app()->user->hasFlash('contact')): ?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>
    <?php else: ?>
    
    <div class="block" id="forms">

    <?php $form=$this->beginWidget('CActiveForm'); ?>
        <fieldset class="login">
            <p class="note">
                <label>&nbsp;</label>
                Fields with <span class="required">*</span> are required.
            </p>
            

            <?php echo $form->errorSummary($model); ?>

            <p>
                <?php echo $form->labelEx($model,'name'); ?>
                <?php echo $form->textField($model,'name'); ?>
            </p>

            <p>
                <?php echo $form->labelEx($model,'email'); ?>
                <?php echo $form->textField($model,'email'); ?>
            </p>

            <p>
                <?php echo $form->labelEx($model,'subject'); ?>
                <?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
            </p>

            <p>
                <?php echo $form->labelEx($model,'body'); ?>
                <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
            </p>

            <?php if(extension_loaded('gd')): ?>
            <p>
                <label>&nbsp;</label>
                <?php $this->widget('CCaptcha'); ?>
            </p>
            <p>
                <?php echo $form->labelEx($model,'verifyCode'); ?>
                <?php echo $form->textField($model,'verifyCode'); ?>
            </p>
            <p>
                <label>&nbsp;</label>
                Please enter the letters as they are shown in the image above.
                <br/>Letters are not case-sensitive
            </p>
            <?php endif; ?>
            
            <?php echo CHtml::submitButton('Submit',array('class'=>'login button')); ?>
        </fieldset>
    <?php $this->endWidget(); ?>

    </div><!-- forms -->

    <?php endif; ?>
</div>
