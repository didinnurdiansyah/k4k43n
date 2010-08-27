<?php
$this->breadcrumbs=array(
    'Dashboard',
);?>
<h2><?php echo Yii::t('app','Dashboard')?></h2>
<div class="grid-view">
    <table class="items">
        <thead>
            <tr>
                <th>No</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($mahasiswa->kelompok->):?>
            <tr class="odd">
                <td width="50px"></td>
                <td>Kota Bandung</td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>
