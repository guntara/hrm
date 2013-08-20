<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'location-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>
	<?php echo $form->textAreaRow($model,'address',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	<?php echo $form->textFieldRow($model,'city',array('class'=>'span5','maxlength'=>255)); ?>
	<?php echo $form->textFieldRow($model,'state',array('class'=>'span5','maxlength'=>255)); ?>
	<?php echo $form->textFieldRow($model,'country',array('class'=>'span5','maxlength'=>255)); ?>
	<?php echo $form->textFieldRow($model,'zip',array('class'=>'span5')); ?>
	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5','maxlength'=>15)); ?>
	<?php echo $form->textFieldRow($model,'fax',array('class'=>'span5','maxlength'=>15)); ?>
	<?php echo $form->textAreaRow($model,'notes',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
