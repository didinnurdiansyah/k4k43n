<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
    'htmlOptions'=>array('class' => 'yform columnar')
)); ?>

    <div class="type-text">
        <?php echo $form->label($jurusan,'id'); ?>
        <?php echo $form->textField($jurusan,'id',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="type-text">
        <?php echo $form->label($jurusan,'nama'); ?>
        <?php echo $form->textField($jurusan,'nama',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="type-text">
        <?php echo $form->label($jurusan,'kode'); ?>
        <?php echo $form->textField($jurusan,'kode',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="type-text">
        <?php echo $form->label($jurusan,'fakultasId'); ?>
        <?php echo $form->textField($jurusan,'fakultasId',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="type-text">
        <?php echo $form->label($jurusan,'created'); ?>
        <?php echo $form->textField($jurusan,'created'); ?>
    </div>

    <div class="type-text">
        <?php echo $form->label($jurusan,'modified'); ?>
        <?php echo $form->textField($jurusan,'modified'); ?>
    </div>

    <div class="type-button">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
