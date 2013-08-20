<?php
$this->breadcrumbs=array(
	'Employees'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create Employee','url'=>array('create')),
);
?>
<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Manage Employees",
)); ?>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'itemsCssClass'=>'table table-hover',
		'id'=>'employee-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			array(
				'header'=>'#',
				'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
				'headerHtmlOptions'=>array('width'=>'21px'),
				'htmlOptions'=>array('style'=>'text-align: center;'),
			),
			'employee_id',
			'firstname',
			'lastname',
			'gender',
			'marital_status',
			/*
			'citizen_id',
			'driver_license',
			'middle',
			'placeofbirth',
			'dateofbirth',
			'nationality',
			'ethnic',
			'photograph',
			*/
			array(
				'header'=>'Action',
				'headerHtmlOptions'=>array('width'=>'50px'),
				'class'=>'bootstrap.widgets.TbButtonColumn',
			),
		),
	)); ?>
<?php $this->endWidget();?>
