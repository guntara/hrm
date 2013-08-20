<?php
$this->menu=array(
	array('label'=>'Manage Attendance','url'=>array('admin')),
);
?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Add Employee Attendances",
)); ?>
	<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
<?php $this->endWidget();?>
