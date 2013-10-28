<?php $salID = EmploymentSalary::model()->find('employee=:empID', array(':empID'=>$employee)); ?>
<?php if (isset($salID)) $model = $this->loadModel($salID->id); ?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Employee Salary Detail",
)); ?>
	<?php $this->widget('bootstrap.widgets.TbDetailView',array(
		'data'=>$model,
		//'type'=>'condensed',
		'attributes'=>array(
			array(
				'name' => 'gaji_pokok',
				'type' => 'text',
				'value' => number_format($model->gaji_pokok, 2),
			),
			array(
				'name' => 'tunjangan_tetap',
				'type' => 'text',
				'value' => number_format($model->tunjangan_tetap, 2),
			),
			array(
				'name' => 'tunjangan_jabatan',
				'type' => 'text',
				'value' => number_format($model->tunjangan_jabatan, 2),
			),
			array(
				'name' => 'tunjangan_makan',
				'type' => 'text',
				'value' => number_format($model->tunjangan_makan, 2),
			),
			array(
				'name' => 'tunjangan_bbm',
				'type' => 'text',
				'value' => number_format($model->tunjangan_bbm, 2),
			),
			array(
				'name' => 'tunjangan_kehadiran',
				'type' => 'text',
				'value' => number_format($model->tunjangan_kehadiran, 2),
			),
			array(
				'name' => 'rapelan',
				'type' => 'text',
				'value' => number_format($model->rapelan, 2),
			),
			array(
				'name' => 'bonus',
				'type' => 'text',
				'value' => number_format($model->bonus, 2),
			),
			array(
				'name' => 'lembur',
				'type' => 'text',
				'value' => number_format($model->lembur, 2),
			),
			array(
				'name' => 'pinjaman',
				'type' => 'text',
				'value' => number_format($model->pinjaman, 2),
			),
			array(
				'name' => 'indisiplin',
				'type' => 'text',
				'value' => number_format($model->indisiplin, 2),
			),
		),
	)); ?>
	<?php $this->widget('bootstrap.widgets.TbButton',array(
		'label' => (isset($salID->id))?'Modify':'Update',
		'type'	=> 'primary',
		'url'	=> (isset($salID->id))?array('/employmentSalary/update', 'id'=>$salID->id):array('/employmentSalary/create', 'id'=>$employee),
	)); ?>
<?php $this->endWidget();?>
