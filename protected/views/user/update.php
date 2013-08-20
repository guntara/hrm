<?php
$this->breadcrumbs=array(
	'Users'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Add User','url'=>array('create')),
	array('label'=>'View User','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage User','url'=>array('admin')),
);
?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title'=>"Update User",
)); ?>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php $this->endWidget();?>
