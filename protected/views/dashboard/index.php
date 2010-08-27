<?php
$this->breadcrumbs=array(
    'Dashboard',
);?>
<h2><?php echo Yii::t('app','Anggota Kelompok')?></h2>
<div class="grid-view">
    <table class="items">
        <thead>
            <tr>
                <th><?php echo Yii::t('app','No')?></th>
                <th><?php echo Yii::t('app','NIM')?></th>
                <th><?php echo Yii::t('app','Nama Lengkap')?></th>
                <th><?php echo Yii::t('app','Jurusan')?></th>
                <th><?php echo Yii::t('app','Kontak')?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($mahasiswa->kelompok->anggota as $i => $mhs):?>
            <tr class="<?php echo $i%2==0?'odd':'event'?>">
                <td width="50px"><?php echo $i + 1 ?></td>
                <td><?php echo CHtml::link($mhs->nim,array('mahasiswa/view','id' => $mhs->id))?></td>
                <td><?php echo CHtml::link($mhs->namaLengkap,array('mahasiswa/view','id' => $mhs->id))?></td>
                <td><?php echo $mhs->jurusan->nama?></td>
                <td><?php echo $mhs->phone1?></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>
