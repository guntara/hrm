<?php
$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Review','url'=>array('index')),
	array('label'=>'Create Review','url'=>array('create')),
	array('label'=>'Update Review','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Review','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Review','url'=>array('admin')),
);
?>

<h1>View Review #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'employee',
		'periode',
		'due_date',
		'reviewer',
		'status',
	),
)); ?>
