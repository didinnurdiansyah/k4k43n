<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <div class="row">
        <?php echo $form->label($berita,'id'); ?>
        <?php echo $form->textField($berita,'id',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($berita,'title'); ?>
        <?php echo $form->textField($berita,'title',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($berita,'body'); ?>
        <?php echo $form->textArea($berita,'body',array('rows'=>6, 'cols'=>50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($berita,'created'); ?>
        <?php echo $form->textField($berita,'created'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($berita,'modified'); ?>
        <?php echo $form->textField($berita,'modified'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
