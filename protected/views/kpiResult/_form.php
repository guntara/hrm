<script language="javascript">
function convertDropDownToTextBox(x,y){
	var sum = 0;
	var rate = document.getElementById('dropdown'+x).value;
	sum = new Number(rate);
	result = sum  * (y/100);
	document.getElementById('temp_result'+x).value = result;
	//alert(result);
	getSumResult();
}

function getSumResult(){
	var inputTeks = document.getElementsByTagName("input");
	var sum = 0;

	for (var i = 0; i < inputTeks.length; ++i) {
		inputName = inputTeks[i].getAttribute("name");
		if (inputName && inputName.indexOf("temp_result") == 0) {
			//alert(inputTeks[i].value);
			sum += new Number(inputTeks[i].value);
		}
	}
	document.getElementById('final_score').innerHTML = 'Total Score : ' + sum; 
}
</script>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'kpi-result-form',
	'enableAjaxValidation'=>false,
)); ?>
	<div>
	<?php echo $form->errorSummary($model); ?>
	<table id="dataTable" class="table">
		<thead><tr>
			<th style='width:5%;'>#</th>
			<th>Indicator</th>
			<th style='text-align:left;width:10%;text-align:center;'>Weight (%)</th>
			<th style='text-align:left;width:15%;text-align:center;'>Rating/Value</th>
			<th style='text-align:left;width:5%;'></th>
			<th style='text-align:left;width:5%;text-align:center;'>Result</th>
		</tr></thead>
		<tbody>
		<?php $proRev=Review::model()->findByPK($revID); ?>
		<?php $proJob=EmploymentJob::model()->find('employee=:empid', array(':empid'=>$proRev->employee)); ?>
		<?php $proKPI=Kpi::model()->findAll('job_id=:job', array(':job'=>$proJob->job_id)); ?>
		<?php if (isset($proKPI)) { $i=1; $j=0; ?>
			<?php foreach($proKPI as $key => $data) { ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $form->hiddenField($model,'kpi_id[]',array('type'=>"hidden",'size'=>2, 'value'=>$data['id'])); ?><?php echo $data['kpi']; ?></td>
				<td style='text-align:center;'><?php $j= $data['weight'];echo $j; ?></td>
				<td style='text-align:center;'>
					<?php $options = array(
						'id' => "dropdown$i",
						'onchange'=>"return convertDropDownToTextBox($i, $j)",
					); ?>
					<?php echo CHtml::activeDropDownList($model, 'rating[]', array('--- Please Select ---', '1', '2', '3', '4', '5'), $options); ?>
				</td>
				<td style='text-align:center;'>
				<?php $this->widget('bootstrap.widgets.TbButton', array(
					'label'=>'?',
					'type'=>'danger',
					'htmlOptions'=>array(
						'data-title'=>'A Title',
						'data-placement'=>'left',
						'data-content'=>'And here\'s some amazing content. It\'s very engaging. right?',
						'rel'=>'popover'
					),
				)); ?>
				</td>
				<td><?php echo(CHtml::textField("temp_result$i", '',array('class'=>'input-mini', 'readonly'=>'readonly', 'style'=>'text-align:right;'))); ?></td>
			</tr>
			<?php $i++; } ?>
			<tr>
				<th style='text-align:right;' colspan=6 id='final_score'></td>
				<?php echo $form->hiddenField($model,'review_id',array('type'=>"hidden",'size'=>2, 'value'=>$proRev->id)); ?>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	</div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
