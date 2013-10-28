<?php $conID = EmploymentContact::model()->find('emp_id=:empID', array(':empID'=>$employee)); ?>
<?php if (isset($conID)) $model = $this->loadModel($conID->id); ?>
<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Contact Detail",
)); ?>
	<?php $this->widget('bootstrap.widgets.TbDetailView',array(
		'data'=>$model,
		'attributes'=>array(
			'address1',
			'address2',
			'city',
			'state',
			'zip',
			'country',
			'telephone',
			'mobile',
			'office_phone',
			'email',
			'othere_email',
		),
	)); ?>
	<?php $this->widget('bootstrap.widgets.TbButton',array(
		'label' => (isset($conID->id))?'Modify':'Update',
		'type'	=> 'primary',
		'url'	=> (isset($conID->id))?array('/employmentContact/update', 'id'=>$conID->id):array('/employmentContact/create', 'id'=>$employee),
	)); ?>
<?php $this->endWidget();?>
