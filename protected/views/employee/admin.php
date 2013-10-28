<?php $this->menu=array(
	array('label'=>'Create Employee','url'=>array('create')),
);?>

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
			array(
				'header'=>'Employee Name',
				'name'=>'employee_id',
				'type'=>'text',
				'value'=> array($this,'getNames'),
			),
			array(
				'name'=>'employee_id',
				'type'=>'text',
				'headerHtmlOptions'=>array('width'=>'12%'),
				'htmlOptions'=>array('style'=>'text-align: center;'),
			),
			array(
				'name'=>'citizen_id',
				'type'=>'text',
				'headerHtmlOptions'=>array('width'=>'15%'),
				'htmlOptions'=>array('style'=>'text-align: center;'),
			),
			array(
				'name'=>'gender',
				'type'=>'text',
				'headerHtmlOptions'=>array('width'=>'10%'),
				'htmlOptions'=>array('style'=>'text-align: center;'),
				'filter'=>array('1'=>'Male','0'=>'Female'),
				'value'=>'($data->gender=="1")?("Male"):("Female")',
			),
			array(
				'name'=>'marital_status',
				'type'=>'text',
				'headerHtmlOptions'=>array('width'=>'13%'),
				'htmlOptions'=>array('style'=>'text-align: center;'),
				'filter'=>array('0'=>'Single','1'=>'Married','2'=>'Other'),
				'value'=> array($this,'maritalStatus'),
			),
			array(
				'name'=>'dateofbirth',
				'type'=>'text',
				'headerHtmlOptions'=>array('width'=>'13%'),
				'htmlOptions'=>array('style'=>'text-align: center;'),
			),
			/*
			'driver_license',
			'middle',
			'placeofbirth',
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
