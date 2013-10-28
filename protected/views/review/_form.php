<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'review-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
)); ?>
<?php
$today = date("Y-m-d");
if (date("d") > 20) $periode = date("Y") . '-' . date("m") . '-21 - ' . date("Y") . '-' . (date("m")+1) . '-20';
else $periode = date("Y") . '-' . (date("m")-1) . '-21 - ' . date("Y") . '-' . date("m") . '-20';
?>
	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->dropDownListRow($model,'employee', Employee::model()->empList($periode), array('prompt'=>'--- Select Employee ---','class'=>'span4',)); ?>
	<?php echo $form->textFieldRow($model,'periode',array('class'=>'span4', 'readOnly'=>'readOnly', 'value'=>$periode)); ?>
	<div class="control-group ">
		<label class="control-label required" for="Review_due_date">Due Date <span class="required">*</span></label>
		<div class="controls">
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'name'=>'Review[due_date]',
			'options'=>array('showAnim'=>'fold','dateFormat'=>'yy-mm-dd',),
			'htmlOptions'=>array('class'=>'span4',)
		));?>
		</div>
	</div>
	<?php echo $form->dropDownListRow($model,'reviewer',CHtml::listData(Employee::model()->findAllBySql("SELECT `id`, CONCAT(firstname, ' ', middle, ' ', lastname) AS `firstname` FROM `tbl_employee`"), 'id', 'firstname'),array('prompt'=>'--- Select Reviewer ---','class'=>'span4',)); ?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
