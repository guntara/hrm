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

<?php 

?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'kpi-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListRow($model,'job_id', CHtml::listData(Job::model()->findAll(), 'id','title'), array('class'=>'span8', 'prompt'=>'--- Select Job Title ---')); ?>

	<div>
	<table id="dataTable" class="table">
		<thead><tr>
			<th style='width:5%;'></th>
			<th style='text-align:left;width:35%;'><?php echo $form->labelEx($model,'kpi'); ?></th>
			<th style='text-align:left;width:15%;'><?php echo $form->labelEx($model,'weight'); ?></th>
			<th><div style='float:left;width:70%;'><?php echo $form->labelEx($model,'note'); ?></div>
			    <div style='overflow:hidden;'><input type="button" value="Add" onclick="addRow('dataTable')" class="btn btn-success" />
				 <input type="button" value="Del" onclick="deleteRow('dataTable')" class="btn btn-danger" />
			    </div>
			</th>
		</tr></thead>
		<tbody><tr>
			<td><input type="checkbox" name="chk" /></td>
			<td><?php echo $form->textField($model,'kpi[]', array('class'=>'input-xlarge')); ?></td>
			<td><?php echo $form->textField($model,'weight[]', array('class'=>'input-mini')); ?></td>
			<td colspan=2><?php echo(CHtml::textArea('Kpi[note][]','',array('class'=>'input-block-level','rows'=>'6')));?></td>
		</tr></tbody>
	</table>
	</div>

	<?php //echo $form->textAreaRow($model,'note',array('rows'=>5, 'cols'=>50, 'class'=>'span8')); ?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
