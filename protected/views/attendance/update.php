<?php
$this->menu=array(
	array('label'=>'Create Attendance','url'=>array('create')),
	array('label'=>'View Attendance','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Attendance','url'=>array('admin')),
);
?>
<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Update Employee Attendances",
)); ?>
	<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
<?php $this->endWidget();?>
