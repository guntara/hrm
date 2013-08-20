<?php
$this->breadcrumbs=array(
	'Job Categories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Add Job Category','url'=>array('create')),
);
?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Manage Job Categories",
)); ?>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'itemsCssClass'=>'table table-hover',
		'id'=>'job-category-grid',
		'dataProvider'=>$model->search(),
		'columns'=>array(
			array(
				'header'=>'#',
				'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
				'headerHtmlOptions'=>array('width'=>'21px'),
				'htmlOptions'=>array('style'=>'text-align: center;'),
			),
			array(
				'name'=>'name',
				'type'=>'text',
				'headerHtmlOptions'=>array('width'=>'280px'),
				'htmlOptions'=>array('style'=>'text-align: left;'),

			),
			'detail',
			array(
				'header'=>'Action',
				'headerHtmlOptions'=>array('width'=>'50px'),
				'class'=>'bootstrap.widgets.TbButtonColumn',
			),
		),
	)); ?>
<?php $this->endWidget();?>
