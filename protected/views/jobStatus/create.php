<?php
$this->breadcrumbs=array(
	'Job Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobStatus','url'=>array('index')),
	array('label'=>'Manage JobStatus','url'=>array('admin')),
);
?>

<h1>Create JobStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>