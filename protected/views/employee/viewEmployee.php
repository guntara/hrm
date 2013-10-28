<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Employee $model->employee_id",
)); ?>
	<?php $this->widget('bootstrap.widgets.TbDetailView',array(
		'data'=>$model,
		'attributes'=>array(
			'firstname',
			'middle',
			'lastname',
			'citizen_id',
			'driver_license',
			array(
				'name' => 'gender',
				'type' => 'text',
				'value' => ($model->gender==0)?'Female':'Male',
			),
			array(
				'name' => 'marital_status',
				'type' => 'text',
				'value' => $model->getMarital($model->marital_status),
			),
			'placeofbirth',
			'dateofbirth',
			'nationality',
			'ethnic',
			'photograph',
		),
	)); ?>
	<?php $this->widget('bootstrap.widgets.TbButton',array(
		'label' => 'Modify',
		'type'	=> 'primary',
		'url'	=> array('update','id'=>$model->id),
	)); ?>
<?php $this->endWidget();?>
