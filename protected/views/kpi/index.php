<?php
$this->breadcrumbs=array(
	'Kpis',
);

$this->menu=array(
	array('label'=>'Create Kpi','url'=>array('create')),
	array('label'=>'Manage Kpi','url'=>array('admin')),
);
?>

<h1>Kpis</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
