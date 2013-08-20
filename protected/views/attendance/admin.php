<?php
$this->menu=array(
	array('label'=>'List Attendance','url'=>array('index')),
	array('label'=>'Create Attendance','url'=>array('create')),
);
?>
<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Manage Employee Attendances",
)); ?>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'itemsCssClass'=>'table table-hover',
		'id'=>'attendance-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			array(
				'header'=>'#',
				'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
				'headerHtmlOptions'=>array('width'=>'21px'),
				'htmlOptions'=>array('style'=>'text-align: center;'),
			),
			'employee',
			array(
				'name'=>'date',
				'type'=>'text',
				'headerHtmlOptions'=>array('width'=>'180px'),
				'htmlOptions'=>array('style'=>'text-align: left;'),

			),
			array(
				'name'=>'punch_in',
				'type'=>'text',
				'headerHtmlOptions'=>array('width'=>'150px'),
				'htmlOptions'=>array('style'=>'text-align: left;'),

			),
			array(
				'name'=>'punch_out',
				'type'=>'text',
				'headerHtmlOptions'=>array('width'=>'150px'),
				'htmlOptions'=>array('style'=>'text-align: left;'),

			),
			/*
			'note',
			'update_by',
			'update_at',
			*/
			array(
				'header'=>'Action',
				'headerHtmlOptions'=>array('width'=>'60px'),
				'class'=>'bootstrap.widgets.TbButtonColumn',
			),
		),
	)); ?>
<?php $this->endWidget();?>
