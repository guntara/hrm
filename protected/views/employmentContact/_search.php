<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'emp_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'address1',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'address2',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'city',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'state',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'zip',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'country',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'telephone',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'mobile',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'office_phone',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'othere_email',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
