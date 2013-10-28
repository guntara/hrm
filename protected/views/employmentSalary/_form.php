<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'employment-salary-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'employee',array('type'=>'hidden','size'=>2, 'value'=>$employee)); ?>
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

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
