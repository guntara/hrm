<?php
$this->breadcrumbs=array(
	'Employment Contacts',
);

$this->menu=array(
	array('label'=>'Create EmploymentContact','url'=>array('create')),
	array('label'=>'Manage EmploymentContact','url'=>array('admin')),
);
?>

<h1>Employment Contacts</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
