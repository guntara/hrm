<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee')); ?>:</b>
	<?php echo CHtml::encode($data->employee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gaji_pokok')); ?>:</b>
	<?php echo CHtml::encode($data->gaji_pokok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tunjangan_tetap')); ?>:</b>
	<?php echo CHtml::encode($data->tunjangan_tetap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tunjangan_jabatan')); ?>:</b>
	<?php echo CHtml::encode($data->tunjangan_jabatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tunjangan_makan')); ?>:</b>
	<?php echo CHtml::encode($data->tunjangan_makan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tunjangan_bbm')); ?>:</b>
	<?php echo CHtml::encode($data->tunjangan_bbm); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tunjangan_kehadiran')); ?>:</b>
	<?php echo CHtml::encode($data->tunjangan_kehadiran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rapelan')); ?>:</b>
	<?php echo CHtml::encode($data->rapelan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bonus')); ?>:</b>
	<?php echo CHtml::encode($data->bonus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lembur')); ?>:</b>
	<?php echo CHtml::encode($data->lembur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pinjaman')); ?>:</b>
	<?php echo CHtml::encode($data->pinjaman); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indisiplin')); ?>:</b>
	<?php echo CHtml::encode($data->indisiplin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_by')); ?>:</b>
	<?php echo CHtml::encode($data->update_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_at')); ?>:</b>
	<?php echo CHtml::encode($data->update_at); ?>
	<br />

	*/ ?>

</div>