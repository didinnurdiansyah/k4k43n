<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <div class="row">
        <?php echo $form->label($mahasiswa,'id'); ?>
        <?php echo $form->textField($mahasiswa,'id',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($mahasiswa,'namaLengkap'); ?>
        <?php echo $form->textField($mahasiswa,'namaLengkap',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($mahasiswa,'alamatAsal'); ?>
        <?php echo $form->textField($mahasiswa,'alamatAsal',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($mahasiswa,'alamatTinggal'); ?>
        <?php echo $form->textField($mahasiswa,'alamatTinggal',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($mahasiswa,'fakultasId'); ?>
        <?php echo $form->textField($mahasiswa,'fakultasId',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($mahasiswa,'jurusanId'); ?>
        <?php echo $form->textField($mahasiswa,'jurusanId',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($mahasiswa,'programStudiId'); ?>
        <?php echo $form->textField($mahasiswa,'programStudiId',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($mahasiswa,'jenisKelamin'); ?>
        <?php echo $form->textField($mahasiswa,'jenisKelamin'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($mahasiswa,'created'); ?>
        <?php echo $form->textField($mahasiswa,'created'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($mahasiswa,'modified'); ?>
        <?php echo $form->textField($mahasiswa,'modified'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
