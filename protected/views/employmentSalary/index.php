<?php
$this->breadcrumbs=array(
	'Employment Salaries',
);

$this->menu=array(
	array('label'=>'Create EmploymentSalary','url'=>array('create')),
	array('label'=>'Manage EmploymentSalary','url'=>array('admin')),
);
?>

<h1>Employment Salaries</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
