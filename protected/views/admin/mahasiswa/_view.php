<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaLengkap')); ?>:</b>
	<?php echo CHtml::encode($data->namaLengkap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nim')); ?>:</b>
	<?php echo CHtml::encode($data->nim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamatAsal')); ?>:</b>
	<?php echo CHtml::encode($data->alamatAsal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamatTinggal')); ?>:</b>
	<?php echo CHtml::encode($data->alamatTinggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fakultasId')); ?>:</b>
	<?php echo CHtml::encode($data->fakultasId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jurusanId')); ?>:</b>
	<?php echo CHtml::encode($data->jurusanId); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('kelompokId')); ?>:</b>
	<?php echo CHtml::encode($data->kelompokId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenjangId')); ?>:</b>
	<?php echo CHtml::encode($data->jenjangId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenisKelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenisKelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />

	*/ ?>

</div>
