<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <div class="row">
        <?php echo $form->label($programKkn,'id'); ?>
        <?php echo $form->textField($programKkn,'id',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($programKkn,'nama'); ?>
        <?php echo $form->textField($programKkn,'nama',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($programKkn,'deskripsi'); ?>
        <?php echo $form->textArea($programKkn,'deskripsi',array('rows'=>6, 'cols'=>50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($programKkn,'created'); ?>
        <?php echo $form->textField($programKkn,'created'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($programKkn,'modified'); ?>
        <?php echo $form->textField($programKkn,'modified'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
