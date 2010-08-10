<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kabupatenId')); ?>:</b>
	<?php echo CHtml::encode($data->kabupatenId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kecamatanId')); ?>:</b>
	<?php echo CHtml::encode($data->kecamatanId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('programKknId')); ?>:</b>
	<?php echo CHtml::encode($data->programKknId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />


</div>
