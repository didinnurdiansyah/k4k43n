<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'mahasiswa-form',
    'enableAjaxValidation' => true,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($mahasiswa); ?>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'namaLengkap'); ?>
        <?php echo $form->textField($mahasiswa,'namaLengkap',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($mahasiswa,'namaLengkap'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'nim'); ?>
        <?php echo $form->textField($mahasiswa,'nim',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($mahasiswa,'nim'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'alamatAsal'); ?>
        <?php echo $form->textField($mahasiswa,'alamatAsal',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($mahasiswa,'alamatAsal'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'alamatTinggal'); ?>
        <?php echo $form->textField($mahasiswa,'alamatTinggal',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($mahasiswa,'alamatTinggal'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'fakultasId'); ?>
        <?php echo $form->dropDownList($mahasiswa,'fakultasId',Fakultas::model()->listData,array(
            'empty' => Yii::t('app','Select Fakultas'),
            'ajax' => array(
                'url' => array('dependentSelectJurusan'),
                'data' => array('fakultasId' => 'js:jQuery(this).val()'),
                'replace' => '#Mahasiswa_jurusanId'
            )
        )); ?>
        <?php echo $form->error($mahasiswa,'fakultasId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'jurusanId'); ?>
        <?php echo $form->dropDownList($mahasiswa, 'jurusanId',Jurusan::model()->listData)?>
        <?php echo $form->error($mahasiswa,'jurusanId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'kelompokId'); ?>
        <?php echo $form->dropDownList($mahasiswa, 'kelompokId',Kelompok::model()->listData)?>
        <?php echo $form->error($mahasiswa,'kelompokId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'jenjangId'); ?>
        <?php echo $form->dropDownList($mahasiswa, 'jenjangId',Jenjang::model()->listData)?>
        <?php echo $form->error($mahasiswa,'jenjangId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'jenisKelamin'); ?>
        <?php echo $form->dropDownList($mahasiswa,'jenisKelamin',array(
            Mahasiswa::LAKI_LAKI => Yii::t('app','Laki-laki'),
            Mahasiswa::PEREMPUAN => Yii::t('app','Perempuan'),
        )); ?>
        <?php echo $form->error($mahasiswa,'jenisKelamin'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'phone1'); ?>
        <?php echo $form->textField($mahasiswa,'phone1',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($mahasiswa,'phone1'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'phone2'); ?>
        <?php echo $form->textField($mahasiswa,'phone2',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($mahasiswa,'phone2'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($mahasiswa,'registered'); ?>
        <?php echo $form->dropDownList($mahasiswa,'registered',array(
                0 => Yii::t('app','Belum Registrasi'),
                1 => Yii::t('app','Sudah Registrasi'),
        )); ?>
        <?php echo $form->error($mahasiswa,'jenisKelamin'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($mahasiswa->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
