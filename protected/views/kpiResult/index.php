<?php
$this->breadcrumbs=array(
	'Kpi Results',
);

$this->menu=array(
	array('label'=>'Create KpiResult','url'=>array('create')),
	array('label'=>'Manage KpiResult','url'=>array('admin')),
);
?>

<h1>Kpi Results</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
