<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
    'htmlOptions'=>array('class' => 'yform columnar')
)); ?>

    <div class="type-text">
        <?php echo $form->label($user,'id'); ?>
        <?php echo $form->textField($user,'id',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="type-text">
        <?php echo $form->label($user,'username'); ?>
        <?php echo $form->textField($user,'username',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="type-text">
        <?php echo $form->label($user,'email'); ?>
        <?php echo $form->textField($user,'email',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="type-text">
        <?php echo $form->label($user,'created'); ?>
        <?php echo $form->textField($user,'created'); ?>
    </div>

    <div class="type-text">
        <?php echo $form->label($user,'modified'); ?>
        <?php echo $form->textField($user,'modified'); ?>
    </div>

    <div class="type-button">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
