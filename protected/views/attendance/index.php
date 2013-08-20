<?php
$this->breadcrumbs=array(
	'Attendances',
);

$this->menu=array(
	array('label'=>'Create Attendance','url'=>array('create')),
	array('label'=>'Manage Attendance','url'=>array('admin')),
);
?>

<h1>Attendances</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
