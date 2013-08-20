<?php $this->menu=array(
	array('label'=>'Add Attendance','url'=>array('create')),
	array('label'=>'Manage Attendance','url'=>array('admin')),
); ?>

<?php
$empList = Employee::model()->findAll(); 

$periode[] = date('Y-m-d', mktime(0, 0, 0, date("m")-1, 20, date("Y")));
$periode[] = date('Y-m-d', mktime(0, 0, 0, date("m"), 21, date("Y")));

?>

<div class="row-fluid">
<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Manage Employee Attendances",
)); ?>
	<table class="items table table-striped">
	<thead>
	   <tr>
		<th id="yw121_c0" style="width:5%;">#</th>
		<th id="yw121_c1">Employee Name</th>
		<th id="yw121_c2" style="width:15%;">Day of Works</th>
		<th id="yw121_c3" style="width:15%;">Day of Leaves</th>
		<th id="yw121_c4" style="width:15%;">Day of Absent</th>
		<th id="yw121_c5" style="width:15%;">Indicipline (%)</th>
	   </tr>
	</thead>
	<tbody>
	<?php $i=1;
	foreach($empList as $key => $data) { 
	$counts = Attendance::model()->countWorks($data->employee_id, $periode);
	$absent = Attendance::model()->countAbsent($data->employee_id, $periode);
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $data->firstname . ' ' . $data->lastname; ?></td>
		<td style="text-align:center;"><?php echo $counts; ?></td>
		<td style="text-align:center;"><?php echo $absent; ?></td>
		<td style="text-align:center;"><?php echo $absent; ?></td>
		<td style="text-align:center;"></td>
	</tr>
	<?php $i++; } ?>
	</tbody>
	</table>
<?php $this->endWidget();?>
</div>

