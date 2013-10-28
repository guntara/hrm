<?php
$this->breadcrumbs=array(
	'Job Statuses'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobStatus','url'=>array('index')),
	array('label'=>'Create JobStatus','url'=>array('create')),
	array('label'=>'View JobStatus','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage JobStatus','url'=>array('admin')),
);
?>

<h1>Update JobStatus <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>