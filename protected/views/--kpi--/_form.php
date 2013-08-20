<script language="javascript">
function addRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);
	var colCount = table.rows[1].cells.length;
	 
	for(var i=0; i<colCount; i++) {
		var newcell = row.insertCell(i);
		newcell.innerHTML = table.rows[1].cells[i].innerHTML;
		//alert(newcell.childNodes);

		switch(newcell.childNodes[0].type) {
		case "text":
			newcell.childNodes[0].value = "";
			break;
		case "checkbox":
			newcell.childNodes[0].checked = false;
			break;
		case "select-one":
			newcell.childNodes[0].selectedIndex = 0;
			break;
		}
	}
}
 
function deleteRow(tableID) {
	try {
		var table = document.getElementById(tableID);
		var rowCount = table.rows.length;

		for(var i=0; i<rowCount; i++) {
			var row = table.rows[i];
			var chkbox = row.cells[0].childNodes[0];
			if(null != chkbox && true == chkbox.checked) {
				if(rowCount <= 2) {
					alert("Cannot delete all the rows.");
					break;
				}
				table.deleteRow(i);
				rowCount--;
				i--;
			}
		}
	}catch(e) {
		alert(e);
	}
}
 
</script>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'kpi-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListRow($model,'job_id', CHtml::listData(Job::model()->findAll(), 'id','title'), array('class'=>'span8', 'prompt'=>'--- Select Job Title ---')); ?>
	<?php echo $form->textAreaRow($model,'kpi',array('rows'=>2, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
	<table id="dataTable" class="items">
		<thead><tr>
			<th></th>
			<th style='text-align:left;'><?php echo $form->labelEx($model,'aspect'); ?></th>
			<th style='text-align:left; valign='top'><?php echo $form->labelEx($model,'percent'); ?></th>
			<th><input type="button" value="Add" onclick="addRow('dataTable')" class="btn btn-success" /></th>
		</tr></thead>
		<tbody><tr>
			<td><input type="checkbox" name="chk" /></td>
			<td><?php echo $form->textField($model,'aspect[]', array('class'=>'input-xxlarge')); ?></td>
			<td><?php echo $form->textField($model,'percent[]', array('class'=>'input-mini')); ?></td>
			<td><input type="button" value="Del" onclick="deleteRow('dataTable')" class="btn btn-danger" /></td>
		</tr></tbody>
	</table>
	</div>

	<?php echo $form->textAreaRow($model,'note',array('rows'=>5, 'cols'=>50, 'class'=>'span8')); ?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
