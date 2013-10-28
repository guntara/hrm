<?php $this->menu=array(
	array('label'=>'Add Employee','url'=>array('/employee/create')),
	array('label'=>'List Employee','url'=>array('/employee/admin')),
);?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Employee  Salary",
)); ?>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'itemsCssClass'=>'table table-hover',
		'id'=>'employment-salary-grid',
		'dataProvider'=>$model->search(),
		//'filter'=>$model,
		'columns'=>array(
			array(
				'header'=>'#',
				'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
				'headerHtmlOptions'=>array('width'=>'15px'),
				'htmlOptions'=>array('style'=>'text-align: center;'),
			),
			array(
				'header'=>'Employee Name',
				'name'=>'employee',
				'type'=>'text',
				'value'=> array($this,'getNames'),
			),
			array(
				'header'=>'Basic',
				'name'=>'gaji_pokok',
				'type'=>'raw',
				'value'=>function($data){ return number_format($data->gaji_pokok, 2); },
				'headerHtmlOptions'=>array('width'=>'75px', 'style'=>'text-align: center;'),
				'htmlOptions'=>array('style'=>'text-align: right; padding-right: 0.5em'),

			),
			array(
				'header'=>'Tj. Tetap',
				'name'=>'tunjangan_tetap',
				'type'=>'raw',
				'value'=>function($data){ return number_format($data->tunjangan_tetap, 2); },
				'headerHtmlOptions'=>array('width'=>'75px', 'style'=>'text-align: center;'),
				'htmlOptions'=>array('style'=>'text-align: right; padding-right: 0.5em'),

			),
			array(
				'header'=>'Tj. Jabatan',
				'name'=>'tunjangan_jabatan',
				'type'=>'raw',
				'value'=>function($data){ return number_format($data->tunjangan_jabatan, 2); },
				'headerHtmlOptions'=>array('width'=>'80px', 'style'=>'text-align: center;'),
				'htmlOptions'=>array('style'=>'text-align: right; padding-right: 0.5em'),

			),
			array(
				'header'=>'Bonus',
				'name'=>'bonus',
				'type'=>'raw',
				'value'=>function($data){ return number_format($data->bonus, 2); },
				'headerHtmlOptions'=>array('width'=>'75px', 'style'=>'text-align: center;'),
				'htmlOptions'=>array('style'=>'text-align: right; padding-right: 0.5em'),

			),
			array(
				'header'=>'Lembur',
				'name'=>'lembur',
				'type'=>'raw',
				'value'=>function($data){ return number_format($data->lembur, 2); },
				'headerHtmlOptions'=>array('width'=>'75px', 'style'=>'text-align: center;'),
				'htmlOptions'=>array('style'=>'text-align: right; padding-right: 0.5em'),

			),
			array(
				'header'=>'InDisiplin',
				'name'=>'indisiplin',
				'type'=>'raw',
				'value'=>function($data){ return number_format($data->indisiplin, 2); },
				'headerHtmlOptions'=>array('width'=>'75px', 'style'=>'text-align: center;'),
				'htmlOptions'=>array('style'=>'text-align: right; padding-right: 0.5em'),

			),
			array(
				'header'=>'JHT (2%)',
				'name'=>'jamsostek',
				'type'=>'raw',
				'value'=>function($data){ return number_format(0.02 * ($data->gaji_pokok + $data->tunjangan_tetap), 2); },
				'headerHtmlOptions'=>array('width'=>'75px', 'style'=>'text-align: center;'),
				'htmlOptions'=>array('style'=>'text-align: right; padding-right: 0.5em'),

			),
			array(
				'header'=>'Salary',
				'name'=>'total',
				'type'=>'raw',
				'value'=> array($this,'getTotal'),
				'headerHtmlOptions'=>array('width'=>'80px', 'style'=>'text-align: center;'),
				'htmlOptions'=>array('style'=>'text-align: right; padding-right: 0.5em'),

			),
			/*
			'tunjangan_makan',
			'tunjangan_bbm',
			'tunjangan_kehadiran',
			'rapelan',
			'pinjaman',
			array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
			),
			*/
		),
	)); ?>
<?php $this->endWidget();?>
