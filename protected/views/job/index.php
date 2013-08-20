<?php
$this->breadcrumbs=array(
	'Jobs',
);

$this->menu=array(
	array('label'=>'Create Job','url'=>array('create')),
	array('label'=>'Manage Job','url'=>array('admin')),
);
?>

<h1>Jobs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
