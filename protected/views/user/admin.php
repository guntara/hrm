<?php
$this->breadcrumbs=array(
	'Users'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Add User','url'=>array('create')),
);
?>

<h1>Manage Users</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'itemsCssClass'=>'table table-hover',
	'dataProvider'=>$model->search(),
	'columns'=>array(
			array(
				'header'=>'#',
				'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
				'headerHtmlOptions'=>array('width'=>'21px'),
				'htmlOptions'=>array('style'=>'text-align: center;'),
			),
			array(
				'name'=>'employee',
				'header'=>'Employee ID',
				'type'=>'text',
				'headerHtmlOptions'=>array('width'=>'90px'),
				'htmlOptions'=>array('style'=>'text-align: left;'),
			),
			array(
				'name'=>'employee',
				'header'=>'Employee Name',
				'type'=>'text',
				'headerHtmlOptions'=>array('width'=>'250px'),
				'htmlOptions'=>array('style'=>'text-align: left;'),
			),
		'email',
		'role',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
