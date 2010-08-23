<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'kelompok-form',
    'enableAjaxValidation' => true,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($kelompok); ?>
    
    <div class="row">
        <?php echo $form->labelEx($kelompok,'programKknId'); ?>
        <?php echo $form->dropDownList($kelompok,'programKknId',ProgramKkn::model()->listData); ?>
        <?php echo $form->error($kelompok,'programKknId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($kelompok,'kabupatenId'); ?>
        <?php echo $form->dropDownList($kelompok,'kabupatenId',Kabupaten::model()->listData,array(
            'empty' => Yii::t('app','Select Kabupaten'),
            'ajax' => array(
                'url' => array('dependentSelectKecamatan'),
                'data' => array('kabupatenId' => 'js:jQuery(this).val()'),
                'replace' => '#Kelompok_kecamatanId'
            )
        )); ?>
        <?php echo $form->error($kelompok,'kabupatenId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($kelompok,'kecamatanId'); ?>
        <?php echo $form->dropDownList($kelompok,'kecamatanId',Kecamatan::model()->listData,array('empty' => Yii::t('app','Select Kecamatan'))); ?>
        <?php echo $form->error($kelompok,'kecamatanId'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($kelompok,'lokasi'); ?>
        <?php echo $form->textField($kelompok,'lokasi',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($kelompok,'lokasi'); ?>
    </div>
    
    <div class="type-text">
        <?php echo $form->labelEx($kelompok,'position'); ?>
        <?php echo $form->hiddenField($kelompok,'latitude')?>
        <?php echo $form->hiddenField($kelompok,'longitude')?>
        <div id="map_canvas" style="height:200px"></div>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($kelompok->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
    var latlng = new google.maps.LatLng(<?php echo $kelompok->latitude ?>,<?php echo $kelompok->longitude?>);
    var contentString = '<?php echo Yii::t('app','Your Location')?>';
    
    var options = {
        zoom: 11,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById('map_canvas'), options);
    var marker = new google.maps.Marker({
        position: latlng, 
        map: map,
        title: contentString,
        draggable: true
    });
    google.maps.event.addListener(marker, 'position_changed', function() {
        $('#Kelompok_latitude').val(marker.getPosition().lat());
        $('#Kelompok_longitude').val(marker.getPosition().lng());
    });
</script>
