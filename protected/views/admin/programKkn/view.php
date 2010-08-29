<?php
$this->breadcrumbs=array(
    'Program Kkns'=>array('index'),
    $programKkn->id,
);

$this->menu=array(
    array('label'=>Yii::t('app','List Program Kkn'), 'url'=>array('index')),
    array('label'=>Yii::t('app','Create Program Kkn'), 'url'=>array('create')),
    array('label'=>Yii::t('app','Update Program Kkn'), 'url'=>array('update', 'id'=>$programKkn->id)),
    array('label'=>Yii::t('app','Delete Program Kkn'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$programKkn->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>Yii::t('app','Manage Program Kkn'), 'url'=>array('admin')),
);
?>

<h2><?php echo Yii::t('app','View Program Kkn') ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$programKkn,
    'attributes'=>array(
        'id',
        'nama',
        'deskripsi',
        'created',
        'modified',
    ),
)); ?>


<h2><?php echo Yii::t('app','Prioritas Jurusan')?></h2>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'program-kkn-form',
    'enableAjaxValidation' => true,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($prioritas); ?>
    
    <div class="row">
        <?php echo $form->labelEx($prioritas,'level'); ?>
        <?php echo $form->dropDownList($prioritas,'level',
            array(
                1 => 'Level 1',
                2 => 'Level 2',
                3 => 'Level 3',
                4 => 'Level 4',
                5 => 'Level 5'
            )); ?>
        <?php echo $form->error($prioritas,'level'); ?>
    </div>
    
    
    <div class="row">
        <?php echo $form->labelEx($prioritas,'jurusanId'); ?>
        <?php echo $form->dropDownList($prioritas,'jurusanId',
            Jurusan::model()->listData,array('empty' => Yii::t('app','Pilih Jurusan'))); ?>
        <?php echo $form->error($prioritas,'jurusanId'); ?>
    </div>
    

    <div class="row buttons">
        <?php echo CHtml::submitButton('Tambah Prioritas'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'program-kkn-grid',
    'dataProvider'=>$prioritas->search(),
    'filter'=>$prioritas,
    'columns'=>array(
        array(
            'header' => 'No',
            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',  
            'htmlOptions' => array('width' => '50px'),
        ),
        'level',
        'jurusan.nama',
        array(
            'class'=>'CButtonColumn',
            'deleteButtonUrl' => 'array("deletePrioritas","id" => $data->jurusan->id, "prioritas_id" => $data->id)',
        ),
    ),
)); ?>






