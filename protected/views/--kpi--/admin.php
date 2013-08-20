<?php
$this->menu=array(
	array('label'=>'List KPI','url'=>array('admin')),
	array('label'=>'Add KPI','url'=>array('create')),
);
?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"List Key Performance Indicator",
)); ?>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'itemsCssClass'=>'table table-hover',
		'id'=>'kpi-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			array(
				'header'=>'#',
				'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
				'headerHtmlOptions'=>array('width'=>'21px'),
				'htmlOptions'=>array('style'=>'text-align: center;'),
			),
			array(
				'name'=>'job_id',
				'type'=>'text',
				'value'=> array($this,'getJobs'),
			),
			'kpi',
			array(
				'name'=>'aspect',
				'type'=>'raw',
				'headerHtmlOptions'=>array('width'=>'10%'),
				'htmlOptions'=>array('style'=>'text-align: center;'),
				'value'=> array($this,'getAspect'),
			),
			array(
				'header'=>'Action',
				'headerHtmlOptions'=>array('width'=>'10%'),
				'class'=>'bootstrap.widgets.TbButtonColumn',
			),
		),
	)); ?>
<?php $this->endWidget();?>
