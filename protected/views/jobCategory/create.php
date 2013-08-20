<?php
$this->breadcrumbs=array(
	'Job Categories'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage Job Category','url'=>array('admin')),
);
?>
<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Create Job Categories",
)); ?>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php $this->endWidget();?>
