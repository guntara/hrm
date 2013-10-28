<?php $empID = EmploymentJob::model()->find('employee=:empID', array(':empID'=>$employee)); ?>
<?php if (isset($empID)) $model = $this->loadModel($empID->id); ?>
<?php Yii::app()->session['employeeID'] = $employee; ?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Job Detail",
)); ?>
	<?php $this->widget('bootstrap.widgets.TbDetailView',array(
		'data'=>$model,
		'attributes'=>array(
			array(
				'name' => 'job_id',
				'type' => 'text',
				'value' => $model->getJob($model->job_id),
			),
			array(
				'name' => 'status_id',
				'type' => 'text',
				'value' => $model->getStatus($model->status_id),
			),
			array(
				'name' => 'category_id',
				'type' => 'text',
				'value' => $model->getCategory($model->category_id),
			),
			array(
				'name' => 'joined_date',
				'type' => 'text',
				'value' => date_format(new DateTime($model->joined_date), 'd M Y'),
			),
			array(
				'name' => 'department',
				'type' => 'text',
				'value' => $model->getDepartment($model->department),
			),
			array(
				'name' => 'location',
				'type' => 'text',
				'value' => $model->getLocation($model->location),
			),
		),
	)); ?>
	<?php $this->widget('bootstrap.widgets.TbButton',array(
		'label' => (isset($empID->id))?'Modify':'Update',
		'type'	=> 'primary',
		'url'	=> (isset($empID->id))?array('/employmentJob/update', 'id'=>$empID->id):array('/employmentJob/create'),
	)); ?>
<?php $this->endWidget();?>
