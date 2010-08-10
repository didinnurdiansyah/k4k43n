<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <div class="row">
        <?php echo $form->label($fakultas,'id'); ?>
        <?php echo $form->textField($fakultas,'id',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($fakultas,'nama'); ?>
        <?php echo $form->textField($fakultas,'nama',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($fakultas,'kode'); ?>
        <?php echo $form->textField($fakultas,'kode',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($fakultas,'created'); ?>
        <?php echo $form->textField($fakultas,'created'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($fakultas,'modified'); ?>
        <?php echo $form->textField($fakultas,'modified'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
