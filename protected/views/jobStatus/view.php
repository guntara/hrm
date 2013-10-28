<?php
$this->breadcrumbs=array(
	'Job Statuses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List JobStatus','url'=>array('index')),
	array('label'=>'Create JobStatus','url'=>array('create')),
	array('label'=>'Update JobStatus','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete JobStatus','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobStatus','url'=>array('admin')),
);
?>

<h1>View JobStatus #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'detail',
	),
)); ?>
