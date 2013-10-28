<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'employee',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'gaji_pokok',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tunjangan_tetap',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tunjangan_jabatan',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tunjangan_makan',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tunjangan_bbm',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tunjangan_kehadiran',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'rapelan',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'bonus',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'lembur',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pinjaman',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'indisiplin',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'update_by',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'update_at',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
