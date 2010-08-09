<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <div class="row">
        <?php echo $form->label($kecamatan,'id'); ?>
        <?php echo $form->textField($kecamatan,'id',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($kecamatan,'nama'); ?>
        <?php echo $form->textField($kecamatan,'nama',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($kecamatan,'kabupatenId'); ?>
        <?php echo $form->textField($kecamatan,'kabupatenId',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($kecamatan,'created'); ?>
        <?php echo $form->textField($kecamatan,'created'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($kecamatan,'modified'); ?>
        <?php echo $form->textField($kecamatan,'modified'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
