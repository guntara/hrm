<?php
$this->menu=array(
	array('label'=>'Create Employee','url'=>array('create')),
	array('label'=>'Update Employee','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Employee','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employee','url'=>array('admin')),
);
?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Employee $model->employee_id",
)); ?>
	<?php $this->widget('bootstrap.widgets.TbDetailView',array(
		'data'=>$model,
		'attributes'=>array(
			'firstname',
			'middle',
			'lastname',
			'citizen_id',
			'driver_license',
			'gender',
			'marital_status',
			'placeofbirth',
			'dateofbirth',
			'nationality',
			'ethnic',
			'photograph',
		),
	)); ?>
<?php $this->endWidget();?>
