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
        <?php echo $form->label($mahasiswa,'nim'); ?>
        <?php echo $form->textField($mahasiswa,'nim',array('size'=>60,'maxlength'=>255)); ?>
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
        <?php echo $form->labelEx($mahasiswa,'fakultasId'); ?>
        <?php //echo $form->dropDownList($mahasiswa, 'fakultasId',Fakultas::model()->listData)?>
        <?php echo $form->dropDownList($mahasiswa,'fakultasId',Fakultas::model()->listData,array(
            'empty' => Yii::t('app','Select Fakultas'),
            'ajax' => array(
                'url' => array('dependentSelectJurusan'),
                'data' => array('fakultasId' => 'js:jQuery(this).val()'),
                'replace' => '#Mahasiswa_jurusanId'
            )
        )); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'jurusanId'); ?>
        <?php echo $form->dropDownList($mahasiswa, 'jurusanId',Jurusan::model()->listData)?>
    </div>
    <?php /*
    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'kelompokId'); ?>
        <?php echo $form->dropDownList($mahasiswa, 'kelompokId',Kelompok::model()->listData)?>
    </div>
    */?>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'jenjangId'); ?>
        <?php echo $form->dropDownList($mahasiswa, 'jenjangId',Jenjang::model()->listData)?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'jenisKelamin'); ?>
        <?php echo $form->dropDownList($mahasiswa,'jenisKelamin',array(
            Mahasiswa::LAKI_LAKI => Yii::t('app','Laki-laki'),
            Mahasiswa::PEREMPUAN => Yii::t('app','Perempuan'),
        )); ?>
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
