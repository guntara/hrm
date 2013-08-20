<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'employee-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'employee_id',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'citizen_id',array('class'=>'span5','maxlength'=>16)); ?>

	<?php echo $form->textFieldRow($model,'driver_license',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'firstname',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'middle',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'lastname',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->dropDownListRow($model, 'gender', array('0'=>'Female','1'=>'Male'), array('empty'=>'--- Select Gender ---'));?>

	<?php echo $form->dropDownListRow($model, 'marital_status', array('0'=>'Single','1'=>'Married','2'=>'Other'), array('empty'=>'--- Select Marital Status ---'));?>

	<?php echo $form->textFieldRow($model,'placeofbirth',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="control-group ">
		<label class="control-label required" for="Employee_dateofbirth">Date of Birth <span class="required">*</span></label>
		<div class="controls"><span class="add-on"><i class="icon-calendar"></i></span>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',	array(
			'model'=>$model,
			'attribute'=>'dateofbirth',
			'options' => array(
				'dateFormat'=>'yy-mm-dd',
				'changeMonth' => 'true',
				'changeYear' => 'true',
				'constrainInput' => 'false',
				'duration'=>'fast',
				'showAnim' =>'slide',
			),
		)); ?>
		</div>
	</div>


	<?php echo $form->textFieldRow($model,'nationality',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'ethnic',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'photograph',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
