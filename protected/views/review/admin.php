<?php $this->menu=array(
	array('label'=>'List Review','url'=>array('admin')),
	array('label'=>'Add Review','url'=>array('create')),
);?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"List Reviews",
)); ?>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'itemsCssClass'=>'table table-hover',
		'id'=>'review-grid',
		'dataProvider'=>$model->search(),
		//'filter'=>$model,
		'columns'=>array(
			array(
				'header'=>'#',
				'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
				'headerHtmlOptions'=>array('width'=>'3%'),
				'htmlOptions'=>array('style'=>'text-align: center;'),
			),
			array(
				'name'=>'employee',
				'type'=>'text',
				'headerHtmlOptions'=>array('width'=>'22%'),
				'value'=> array($this,'getEmployee'),
			),
			'periode',
			array(
				'name'=>'due_date',
				'type'=>'text',
				'headerHtmlOptions'=>array('width'=>'12%'),
				//'value'=> array($this,'getReviewer'),
			),
			array(
				'name'=>'reviewer',
				'type'=>'text',
				'headerHtmlOptions'=>array('width'=>'22%'),
				'value'=> array($this,'getReviewer'),
			),
			array(
				'name'=>'status',
				'type'=>'text',
				'headerHtmlOptions'=>array('width'=>'12%'),
				'filter'=>array('1'=>'Being Reviewed','0'=>'Scheduled'),
				'value'=>'($data->status=="1")?("Being Reviewed"):("Scheduled")',
			),
			/*array(
				'header'=>'Action',
				'headerHtmlOptions'=>array('width'=>'10%'),
				'class'=>'bootstrap.widgets.TbButtonColumn',
			),*/
		),
	)); ?>
<?php $this->endWidget();?>
