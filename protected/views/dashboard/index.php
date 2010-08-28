<?php
$this->breadcrumbs=array(
    'Dashboard',
);?>
<h2><?php echo Yii::t('app','Anggota Kelompok')?></h2>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'mahasiswa-grid',
    'dataProvider'=>$mahasiswa->search(20),
    'columns'=>array(
        array(
            'header' => 'No',
            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',  
            'htmlOptions' => array('width' => '30px'),
        ),
        array(
            'name' => 'namaLengkap',
            'header' => 'Nama',
        ),
        'nim',
        array(
            'name' =>'jurusanId',
            'value' => '$data->jurusan->nama',
        ),
        array(
            'name' =>'jenisKelamin',
            'header' => 'J.Kelamin',
        ),
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
