<?php
$this->breadcrumbs=array(
	'Jobs'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Add Job','url'=>array('create')),
	array('label'=>'View Job','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Job','url'=>array('admin')),
);
?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Update Job",
)); ?>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php $this->endWidget();?>
