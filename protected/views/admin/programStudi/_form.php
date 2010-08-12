<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'program-studi-form',
    'enableAjaxValidation' => true,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($programStudi); ?>

    <div class="row">
        <?php echo $form->labelEx($programStudi,'nama'); ?>
        <?php echo $form->textField($programStudi,'nama',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($programStudi,'nama'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($programStudi,'kode'); ?>
        <?php echo $form->textField($programStudi,'kode',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($programStudi,'kode'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($programStudi,'fakultasId'); ?>
        <?php echo $form->dropDownList($programStudi,'fakultasId',Fakultas::model()->listData); ?>
        <?php echo $form->error($programStudi,'jurusanId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($programStudi,'jurusanId'); ?>
        <?php echo $form->dropDownList($programStudi,'jurusanId',Jurusan::model()->listData); ?>
        <?php echo $form->error($programStudi,'jurusanId'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($programStudi->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
