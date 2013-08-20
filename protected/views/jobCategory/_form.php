<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'job-category-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
)); ?>

<fieldset>
	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>
	<?php echo $form->textAreaRow($model,'detail',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>
</fieldset>
<?php $this->endWidget(); ?>
