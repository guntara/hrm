<?php
$this->breadcrumbs=array(
	'Kpi Results'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List KpiResult','url'=>array('index')),
	array('label'=>'Create KpiResult','url'=>array('create')),
	array('label'=>'Update KpiResult','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete KpiResult','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KpiResult','url'=>array('admin')),
);
?>

<h1>View KpiResult #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'review_id',
		'kpi_id',
		'rating',
		'update_at',
	),
)); ?>
