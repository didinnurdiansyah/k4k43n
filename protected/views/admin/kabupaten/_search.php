<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <div class="row">
        <?php echo $form->label($kabupaten,'id'); ?>
        <?php echo $form->textField($kabupaten,'id',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($kabupaten,'nama'); ?>
        <?php echo $form->textField($kabupaten,'nama',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($kabupaten,'created'); ?>
        <?php echo $form->textField($kabupaten,'created'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($kabupaten,'modified'); ?>
        <?php echo $form->textField($kabupaten,'modified'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
