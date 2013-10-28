<?php
$this->breadcrumbs=array(
	'Employment Jobs',
);

$this->menu=array(
	array('label'=>'Create EmploymentJob','url'=>array('create')),
	array('label'=>'Manage EmploymentJob','url'=>array('admin')),
);
?>

<h1>Employment Jobs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
