<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <div class="row">
        <?php echo $form->label($kelompok,'id'); ?>
        <?php echo $form->textField($kelompok,'id',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($kelompok,'lokasi'); ?>
        <?php echo $form->textField($kelompok,'lokasi',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($kelompok,'kabupatenId'); ?>
        <?php echo $form->textField($kelompok,'kabupatenId',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($kelompok,'kecamatanId'); ?>
        <?php echo $form->textField($kelompok,'kecamatanId',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($kelompok,'programKknId'); ?>
        <?php echo $form->textField($kelompok,'programKknId',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($kelompok,'created'); ?>
        <?php echo $form->textField($kelompok,'created'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($kelompok,'modified'); ?>
        <?php echo $form->textField($kelompok,'modified'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
