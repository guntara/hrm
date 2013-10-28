<?php $this->menu=array(
	array('label'=>'List JobStatus','url'=>array('admin')),
	array('label'=>'Add JobStatus','url'=>array('create')),
);?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"List Reviews",
)); ?>
	<?php $this->widget('bootstrap.widgets.TbGridView',array(
		'id'=>'job-status-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			array(
				'header'=>'#',
				'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
				'headerHtmlOptions'=>array('width'=>'3%'),
				'htmlOptions'=>array('style'=>'text-align: center;'),
			),
			'name',
			'detail',
			array(
				'header'=>'Action',
				'headerHtmlOptions'=>array('width'=>'10%'),
				'class'=>'bootstrap.widgets.TbButtonColumn',
			),
		),
	)); ?>
<?php $this->endWidget();?>
