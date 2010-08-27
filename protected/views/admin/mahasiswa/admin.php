<?php
$this->breadcrumbs=array(
    'Mahasiswas'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label' => Yii::t('app','Create Mahasiswa'), 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('mahasiswa-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h2><?php echo Yii::t('app','Management Mahasiswa') ?></h2>
<div class="loud">
<?php echo Yii::t('app','Jumlah Rata-rata Mahasiswa perkelompok: <b>{jumlah}</b> orang', array(
    '{jumlah}' => ceil(Mahasiswa::model()->count() / Kelompok::model()->count())
))?>
</div>
<?php echo CHtml::link(Yii::t('app','Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
    'mahasiswa'=>$mahasiswa,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'mahasiswa-grid',
    'dataProvider'=>$mahasiswa->search(),
    'filter'=>$mahasiswa,
    'columns'=>array(
        array(
            'header' => 'No',
            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',  
            'htmlOptions' => array('width' => '30px'),
        ),
        array(
            'name' => 'namaLengkap',
            'header' => 'Nama'
        ),
        'nim',
        array(
            'name' =>'jenjangId',
            'filter' => Jenjang::model()->listData,
            'value' => '$data->kodeJenjang',
        ),
        array(
            'name' =>'fakultasId',
            'filter' => Fakultas::model()->listData,
            'value' => '$data->kodeFakultas',
        ),
        array(
            'name' =>'jurusanId',
            'filter' => Jurusan::model()->listData,
            'value' => '$data->kodeJurusan',
        ),
        array(
            'name' =>'jenisKelamin',
            'header' => 'J.Kelamin',
            'filter' => array(
                Mahasiswa::LAKI_LAKI => Yii::t('app','Laki-laki'),
                Mahasiswa::PEREMPUAN => Yii::t('app','Perempuan'),
            )
        ),
        array(
            'name' =>'registered',
            'header' => 'Registrasi',
            'value' => '$data->registered?Yii::t("app","Sudah Registrasi"):Yii::t("app","Belum Registrasi")',
            'filter' => array(
                0 => Yii::t('app','Belum Registrasi'),
                1 => Yii::t('app','Sudah Registrasi'),
                
            )
        ),
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
