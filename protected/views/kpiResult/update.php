<?php
$this->breadcrumbs=array(
	'Kpi Results'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List KpiResult','url'=>array('index')),
	array('label'=>'Create KpiResult','url'=>array('create')),
	array('label'=>'View KpiResult','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage KpiResult','url'=>array('admin')),
);
?>

<h1>Update KpiResult <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>