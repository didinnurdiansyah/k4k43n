<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <div class="row">
        <?php echo $form->label($programStudi,'id'); ?>
        <?php echo $form->textField($programStudi,'id',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($programStudi,'nama'); ?>
        <?php echo $form->textField($programStudi,'nama',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($programStudi,'jurusanId'); ?>
        <?php echo $form->textField($programStudi,'jurusanId',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($programStudi,'created'); ?>
        <?php echo $form->textField($programStudi,'created'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($programStudi,'modified'); ?>
        <?php echo $form->textField($programStudi,'modified'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
