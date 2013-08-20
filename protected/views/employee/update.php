<?php
$this->menu=array(
	array('label'=>'Create Employee','url'=>array('create')),
	array('label'=>'View Employee','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Employee','url'=>array('admin')),
);
?>
<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Update Employee",
)); ?>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php $this->endWidget();?>
