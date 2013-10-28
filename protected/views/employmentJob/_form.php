<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'employment-job-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'employee',array('type'=>'hidden','size'=>2, 'value'=>Yii::app()->session['employeeID'])); ?>
	<?php echo $form->dropDownListRow($model,'job_id',CHtml::listData(Job::model()->findAll(),'id','title'), array('prompt'=>'--- Select Job Title ---','class'=>'span8'));?>
	<?php echo $form->dropDownListRow($model,'status_id',CHtml::listData(JobStatus::model()->findAll(),'id','name'), array('prompt'=>'--- Select Employee Status ---','class'=>'span8'));?>
	<?php echo $form->dropDownListRow($model,'category_id',CHtml::listData(JobCategory::model()->findAll(),'id','name'), array('prompt'=>'--- Select Job Category ---','class'=>'span8'));?>
	<?php echo $form->textFieldRow($model,'joined_date',array('class'=>'input-large')); ?>
	<?php echo $form->dropDownListRow($model,'department',CHtml::listData(Department::model()->findAll(),'id','name'), array('prompt'=>'--- Select Department ---','class'=>'span8'));?>
	<?php echo $form->dropDownListRow($model,'location',CHtml::listData(Location::model()->findAll(),'id','name'), array('prompt'=>'--- Select Location ---','class'=>'span8'));?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
