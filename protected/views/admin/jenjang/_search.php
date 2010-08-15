<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <div class="row">
        <?php echo $form->label($jenjang,'id'); ?>
        <?php echo $form->textField($jenjang,'id',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($jenjang,'nama'); ?>
        <?php echo $form->textField($jenjang,'nama',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($jenjang,'created'); ?>
        <?php echo $form->textField($jenjang,'created'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($jenjang,'modified'); ?>
        <?php echo $form->textField($jenjang,'modified'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
