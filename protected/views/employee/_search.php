<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'employee_id',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'citizen_id',array('class'=>'span5','maxlength'=>16)); ?>

	<?php echo $form->textFieldRow($model,'driver_license',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'firstname',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'middle',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'lastname',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'gender',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'marital_status',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'placeofbirth',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'dateofbirth',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nationality',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'ethnic',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'photograph',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
