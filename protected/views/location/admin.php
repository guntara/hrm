<?php
$this->breadcrumbs=array(
	'Locations'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Add Location','url'=>array('create')),
);
?>
<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Manage Locations",
)); ?>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'itemsCssClass'=>'table table-hover',
		'id'=>'location-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			array(
				'header'=>'#',
				'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
				'headerHtmlOptions'=>array('width'=>'21px'),
				'htmlOptions'=>array('style'=>'text-align: center;'),
			),
			'name',
			'address',
			'city',
			'phone',
			/*
			'state',
			'country',
			'zip',
			'fax',
			'notes',
			*/
			array(
				'header'=>'Action',
				'headerHtmlOptions'=>array('width'=>'50px'),
				'class'=>'bootstrap.widgets.TbButtonColumn',
			),
		),
	)); ?>
<?php $this->endWidget();?>
