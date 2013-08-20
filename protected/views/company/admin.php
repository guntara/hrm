<?php
$this->breadcrumbs=array(
	'Companies'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create Company','url'=>array('create')),
);
?>

<legend>Manage Companies</legend>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'itemsCssClass'=>'table table-hover',
	'id'=>'company-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'name',
		'taxID',
		'phone',
		'city',
		'country',
		/*
		'fax',
		'email',
		'address1',
		'address2',
		'state',
		'zip',
		'note',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
