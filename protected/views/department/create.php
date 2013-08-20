<?php
$this->breadcrumbs=array(
	'Departments'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Department','url'=>array('admin')),
);
?>
<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Create Department",
)); ?>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php $this->endWidget();?>
