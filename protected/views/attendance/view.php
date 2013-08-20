<?php
$this->menu=array(
	array('label'=>'Create Attendance','url'=>array('create')),
	array('label'=>'Update Attendance','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Attendance','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Attendance','url'=>array('admin')),
);
?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"View Employee Attendances $model->employee",
)); ?>
	<?php $this->widget('bootstrap.widgets.TbDetailView',array(
		'data'=>$model,
		'attributes'=>array(
			'employee',
			'date',
			'punch_in',
			'punch_out',
			'note',
			'update_by',
			'update_at',
		),
	)); ?>
<?php $this->endWidget();?>
