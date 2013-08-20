<?php
$this->breadcrumbs=array(
	'Job Categories',
);

$this->menu=array(
	array('label'=>'Create JobCategory','url'=>array('create')),
	array('label'=>'Manage JobCategory','url'=>array('admin')),
);
?>

<h1>Job Categories</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
